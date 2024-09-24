<?php
use function Livewire\Volt\{state};
state(['fieldName' => '', 'form' => '']);
?>

<div class="">
    <div class="">
        <div class="w-4/12 pb-0 pl-2 md:pt-3">
            <label for="{{ $fieldName }}" class="">
                {{ \Str::ucfirst($fieldName) }}:
            </label>
        </div>
        <div class="p-2 w-full">
            <input
                id="{{ $fieldName }}" name="{{ $fieldName }}" type="text"
                style="border:1px dotted"
                value="{{ $form->{$fieldName} }}"
                tabindex="-1"
                readonly
            />
        </div>
    </div>
</div>
