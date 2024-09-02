<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Livewire\Forms\UserForm;

class Editor extends Component
{
    public User $user;
    public UserForm $form;

    public function mount()
    {
        $this->retrieveDbData();
    }


    protected function retrieveDbData(): void
    {
        $this->user = User::find(1);

        $this->form->setUser($this->user);
    }

    public function render()
    {
        return view('livewire.editor');
    }


    public function update(Request $request)
    {
        \Log::info($this->form);
        \Log::info($this->form->id);

        try {
            $user = User::findOrFail($this->form->id);
        } catch (ModelNotFoundException $e) {
            \Log::info(varDump($e->getMessage(), '-00 ModelNotFoundException'));

            return;
        }

        $this->form->updated_at = Carbon::now();
        $user->name = $this->form->name;
        $user->email = $this->form->email;

        try {
            DB::beginTransaction();
            $user->save();
//            $this->dispatch('profileEditorSaved', ['id' => $this->form->id]);
            $this->dispatch('saved');
            DB::commit();

        } catch (QueryException|\Exception $e) {
            DB::rollBack();
        }
    } // public function update()

}
