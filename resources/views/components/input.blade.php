@props([
    'label' => null,
    'name',
    'type' => 'text',
    'value' => old($name),
])

<div class="w-full">
    @if ($label)
        <label for="{{ $name }}" class="block font-medium text-sm text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ $value }}"
        {{ $attributes->merge([
            'class' =>
                'w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm' .
                ' ' .
                ($errors->has($name) ? 'border-red-500' : '')
        ]) }}
    />

    <x-input-error :messages="$errors->get($name)" />
</div>
