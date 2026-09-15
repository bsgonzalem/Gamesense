@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold">Usuarios</h1>
        <a
            href="{{ route('users.create') }}"
            class="rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-700"
        >
            Nuevo usuario
        </a>
    </div>

    <div class="overflow-hidden rounded-md border border-gray-200 bg-white">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-50 text-left text-xs uppercase tracking-wider text-gray-500">
                <tr>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Correo</th>
                    <th class="px-4 py-3">Dirección</th>
                    <th class="px-4 py-3 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($users as $user)
                    <tr>
                        <td class="px-4 py-3">{{ $user->getName() }}</td>
                        <td class="px-4 py-3">{{ $user->getEmail() }}</td>
                        <td class="px-4 py-3">{{ $user->getAddress() ?? '—' }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('users.show', $user) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('users.edit', $user) }}" class="ml-3 text-gray-600 hover:underline">Editar</a>
                            <form
                                action="{{ route('users.destroy', $user) }}"
                                method="POST"
                                class="ml-3 inline"
                                onsubmit="return confirm('¿Eliminar este usuario?');"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-500">No hay usuarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $users->links() }}
    </div>
@endsection
