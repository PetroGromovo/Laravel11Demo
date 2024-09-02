<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{

    public $id;
    public $name;
    public $email;

    /*Calculated properties from related news/complains tables */
    public $created_at;
    public $updated_at;
    public function setUser(User $user)
    {
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->updated_at = $user->updated_at;
        $this->created_at = $user->created_at;
    }


}
