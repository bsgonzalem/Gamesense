@extends('layouts.app')

@section('title', 'Nuevo usuario')

@section('content')
    <h1 class="mb-6 text-2xl font-semibold">Nuevo usuario</h1>

    <form
        action="{{ route('users.store') }}"
        method="POST"
        class="max-w-lg space-y-4 rounded-md border border-gray-200 bg-white p-6"
    >
        @csrf
        @include('users._form')

        <div class="flex items-center gap-3">
            <button
                type="submit"
                class="rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-700"
            >
                Crear usuario
            </button>
            <a href="{{ route('users.index') }}" class="text-sm text-gray-600 hover:underline">Cancelar</a>
        </div>
    </form>
@endsection
