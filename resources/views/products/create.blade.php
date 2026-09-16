@extends('layouts.app')
@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <textarea name="description" placeholder="Descripción"></textarea>
        <input type="number" name="price" placeholder="Precio">
        <button type="submit">Crear</button>
    </form>
@endsection