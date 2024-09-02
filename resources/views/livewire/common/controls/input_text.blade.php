<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Modelable;

new class extends Component {
    #[Modelable]
    public $form;
    public string $formattedValue = '';
    public string $fieldName = '';
    public string $label = '';
    public ?string $placeholder = '';
    public ?int $maxlength = 0;
    public ?int $tabindex = 0;
};
?>

<div class="">

    <div class="">
        <div class="w-4/12 pb-0 pl-2 md:pt-3 ">
            <label for="{{ $fieldName }}" class="">
                {{ !empty($label) ? $label: \Str::ucfirst(\Str::replace('_', ' ', $fieldName)) }}:
            </label>
        </div>
        <div class="p-2 w-full">
            <input id="{{ $fieldName }}" name="{{ $fieldName }}" type="text"
                   style="border:1px solid"
                   @if(!empty($maxlength)) maxlength="{{ $maxlength }}" @endif
                   wire:model="form.{{ $fieldName }}"
                   autocomplete="off"
                   @if(!empty($placeholder)) placeholder="{{ $placeholder }}" @endif
                   @if(!empty($tabindex)) tabindex="{{ $tabindex }}" @endif/>
            @error('form.' . $fieldName)
            <span class="">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
