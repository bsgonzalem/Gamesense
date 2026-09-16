@extends('layouts.app')
@section('content')
    <h1>Reseña de {{ $review->product->name }}</h1>
    <p>Calificación: {{ $review->rating }}/5</p>
    <p>{{ $review->comment }}</p>
    <p>Por: {{ $review->user->name }}</p>

    <a href="{{ route('reviews.edit', $review->id) }}">Editar</a>
@endsection