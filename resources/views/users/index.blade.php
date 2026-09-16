@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Usuarios</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo usuario</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->getName() }}</td>
                        <td>{{ $user->getEmail() }}</td>
                        <td>{{ $user->getAddress() ?? '—' }}</td>
                        <td class="text-end">
                            <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                            <form
                                action="{{ route('users.destroy', $user) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('¿Eliminar este usuario?');"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No hay usuarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $users->links() }}
    </div>
@endsection
