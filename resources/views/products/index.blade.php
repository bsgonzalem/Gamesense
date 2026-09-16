@extends('layouts.app')
@section('content')
    <h1>Productos</h1>
    <a href="{{ route('products.create') }}">Nuevo producto</a>

    @foreach ($products as $product)
        <div>
            <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
        </div>
    @endforeach
@endsection