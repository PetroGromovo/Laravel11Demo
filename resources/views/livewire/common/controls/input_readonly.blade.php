<?php

use function Livewire\Volt\{state};

state(['fieldName'=> '', 'form'=> '']);

?>

<div class=""  wire:key="{{ $fieldName }}-RootDivReadonly" @saved.window="$wire.$refresh();  alert('REFRESHED');">

    <div class=""  wire:key="{{ $fieldName }}-SplitterDivReadonly">
        <div class="w-4/12 pb-0 pl-2 md:pt-3">
            <label for="{{ $fieldName }}" class="">
                {{ \Str::ucfirst($fieldName) }}:
            </label>
        </div>
        <div class="p-2 w-full"  wire:key="{{ $fieldName }}-ParentDivReadonly">
            <input
                id="{{ $fieldName }}" name="{{ $fieldName }}" type="text"
                style="border:1px dotted"
                value="{{ $form->{$fieldName} }}"
                tabindex="-1"
                wire:key="{{ $fieldName }}-Readonly"
                readonly/>
        </div>
    </div>

</div>
