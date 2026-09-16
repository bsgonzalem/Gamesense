@extends('layouts.app')

@section('title', 'Detalle de usuario')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">{{ $user->getName() }}</h1>
        <a href="{{ route('users.edit', $user) }}" class="btn btn-outline-primary">Editar</a>
    </div>

    <dl class="row card p-4">
        <dt class="col-sm-3 text-muted text-uppercase small">Correo</dt>
        <dd class="col-sm-9">{{ $user->getEmail() }}</dd>

        <dt class="col-sm-3 text-muted text-uppercase small">Dirección</dt>
        <dd class="col-sm-9">{{ $user->getAddress() ?? '—' }}</dd>
    </dl>

    <a href="{{ route('users.index') }}" class="d-inline-block mt-3">← Volver al listado</a>
@endsection
