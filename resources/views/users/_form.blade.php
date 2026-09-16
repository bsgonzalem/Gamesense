@php
    $user = $user ?? null;
@endphp

<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input
        type="text"
        name="name"
        id="name"
        value="{{ old('name', $user?->getName()) }}"
        class="form-control @error('name') is-invalid @enderror"
    >
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Correo</label>
    <input
        type="email"
        name="email"
        id="email"
        value="{{ old('email', $user?->getEmail()) }}"
        class="form-control @error('email') is-invalid @enderror"
    >
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="password" class="form-label">
        Contraseña {{ $user ? '(dejar en blanco para no cambiarla)' : '' }}
    </label>
    <input
        type="password"
        name="password"
        id="password"
        class="form-control @error('password') is-invalid @enderror"
    >
    @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">Dirección</label>
    <input
        type="text"
        name="address"
        id="address"
        value="{{ old('address', $user?->getAddress()) }}"
        class="form-control @error('address') is-invalid @enderror"
    >
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
