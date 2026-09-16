@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1>Editar categorias</h1>
        <p>Actualiza la información de las categorias listadas.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <form
                        action="{{ route('category.update', ['id' => $viewData['category']->getId()]) }}"
                        method="POST"
                    >
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Name
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{ old('name', $viewData['category']->getName()) }}"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">
                                Description
                            </label>

                            <textarea
                                class="form-control"
                                id="description"
                                name="description"
                                rows="4"
                                required
                            >{{ old('description', $viewData['category']->getDescription()) }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a
                                href="{{ route('category.show', ['id' => $viewData['category']->getId()]) }}"
                                class="btn btn-secondary"
                            >
                                Cancel
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Update category
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection