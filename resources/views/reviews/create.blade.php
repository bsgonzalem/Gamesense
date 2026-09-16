@extends('layouts.app')
@section('content')
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">

        <label>Calificación:</label>
        <select name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <textarea name="comment" placeholder="Escribe tu reseña"></textarea>
        <button type="submit">Publicar</button>
    </form>
@endsection