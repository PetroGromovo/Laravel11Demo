<div>
    resources/views/livewire/editor.blade.php

    <form class="form-editor" wire:submit="update" enctype="multipart/form-data">


        <livewire:common.controls.input_readonly fieldName="id" :form="$form" :key="'idReadonly'"/>


        name::{{ $form->name }}
        <livewire:common.controls.input_text fieldName="name" wire:model="form" :maxlength="100" tabindex="10"
                                             :key="'nameInputText'"/>



        email::{{ $form->email }}
        <livewire:common.controls.input_text fieldName="email" wire:model="form" :maxlength="50" tabindex="20"
                                             placeholder="Fill your email url" :key="'emailInputText'"/>

        <button class="btn_editor_form_submit" type="submit">
            Update
        </button>
    </form>


    @script
    <script>


        // This event listener updates the component with all childs
        $wire.on("profileEditorSaved", ($options) => {
            console.log('profileEditorSaved $options::')
            console.log($options)

            $wire.$refresh();
            console.log('resources/views/livewire/editor.blade.php AFTER $wire.$refresh() !!!')
        });

    </script>
    @endscript

</div>
