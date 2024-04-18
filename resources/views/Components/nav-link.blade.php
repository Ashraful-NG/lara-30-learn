@props(['active' => false, 'type' => 'a'])

<{{ $type == 'a' ? 'a' : 'button' }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} {{ $type == 'b' ? 'bg-red-500' : '' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
    {{ $slot }}
    </{{ $type == 'a' ? 'a' : 'button' }}>
