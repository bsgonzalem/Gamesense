@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')
    <h1 class="h3 mb-4">Editar usuario</h1>

    <form action="{{ route('users.update', $user) }}" method="POST" class="card p-4" style="max-width: 32rem;">
        @csrf
        @method('PUT')
        @include('users._form', ['user' => $user])

        <div class="d-flex align-items-center gap-2">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('users.index') }}" class="btn btn-link">Cancelar</a>
        </div>
    </form>
@endsection
