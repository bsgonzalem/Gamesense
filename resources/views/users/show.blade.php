@extends('layouts.app')

@section('title', 'Detalle de usuario')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold">{{ $user->getName() }}</h1>
        <a
            href="{{ route('users.edit', $user) }}"
            class="rounded-md border border-gray-300 px-4 py-2 text-sm font-medium hover:bg-gray-50"
        >
            Editar
        </a>
    </div>

    <dl class="grid grid-cols-1 gap-4 rounded-md border border-gray-200 bg-white p-6 sm:grid-cols-2">
        <div>
            <dt class="text-xs uppercase tracking-wider text-gray-500">Correo</dt>
            <dd class="mt-1">{{ $user->getEmail() }}</dd>
        </div>
        <div>
            <dt class="text-xs uppercase tracking-wider text-gray-500">Dirección</dt>
            <dd class="mt-1">{{ $user->getAddress() ?? '—' }}</dd>
        </div>
    </dl>

    <a href="{{ route('users.index') }}" class="mt-6 inline-block text-sm text-blue-600 hover:underline">
        ← Volver al listado
    </a>
@endsection
