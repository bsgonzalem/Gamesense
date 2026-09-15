@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1>Nuestras categorias</h1>
        <p>Descrube y prueba todo lo que tenemos para ti.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @foreach ($viewData['categories'] as $category)
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="{{ route('category.show', ['id' => $category->getId()]) }}">
                        <img
                            src="{{ asset('images/categories/category-' . $loop->iteration . '.jpg') }}"
                            class="card-img-top"
                            alt="{{ $category->getName() }}"
                        >
                    </a>
                    
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $category->getName() }}
                        </h5>

                        <p class="card-text">
                            {{ $category->getDescription() }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection