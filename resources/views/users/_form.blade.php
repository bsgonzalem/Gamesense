@php
    $user = $user ?? null;
@endphp

<div>
    <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
    <input
        type="text"
        name="name"
        id="name"
        value="{{ old('name', $user?->getName()) }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring"
    >
    @error('name')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
    <input
        type="email"
        name="email"
        id="email"
        value="{{ old('email', $user?->getEmail()) }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring"
    >
    @error('email')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="password" class="block text-sm font-medium text-gray-700">
        Contraseña {{ $user ? '(dejar en blanco para no cambiarla)' : '' }}
    </label>
    <input
        type="password"
        name="password"
        id="password"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring"
    >
    @error('password')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="address" class="block text-sm font-medium text-gray-700">Dirección</label>
    <input
        type="text"
        name="address"
        id="address"
        value="{{ old('address', $user?->getAddress()) }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring"
    >
    @error('address')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
