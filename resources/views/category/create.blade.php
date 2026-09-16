@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1>{{ $viewData['title'] }}</h1>
        <p>Agrega una nueva categoría a la tienda.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <form action="{{ route('category.save') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Nombre
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">
                                Descripción
                            </label>

                            <textarea
                                class="form-control"
                                id="description"
                                name="description"
                                rows="4"
                                required
                            >{{ old('description') }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a
                                href="{{ route('category.index') }}"
                                class="btn btn-secondary"
                            >
                                Cancelar
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Crear categoría
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection