@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

        <textarea class="border border-gray-w00 p-2 w-full rounded" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        required
        >{{ $slot  }}</textarea>
    
    <x-form.error name="{{ $name }}"/>
</x-form.field>
    
