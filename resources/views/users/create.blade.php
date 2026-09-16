@extends('layouts.app')

@section('title', 'Nuevo usuario')

@section('content')
    <h1 class="h3 mb-4">Nuevo usuario</h1>

    <form action="{{ route('users.store') }}" method="POST" class="card p-4" style="max-width: 32rem;">
        @csrf
        @include('users._form')

        <div class="d-flex align-items-center gap-2">
            <button type="submit" class="btn btn-primary">Crear usuario</button>
            <a href="{{ route('users.index') }}" class="btn btn-link">Cancelar</a>
        </div>
    </form>
@endsection
