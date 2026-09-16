@extends('layouts.app')
@section('content')
    <h1>Reseñas</h1>
    <a href="{{ route('reviews.create') }}">Nueva reseña</a>

    @foreach ($reviews as $review)
        <div>
            <p>{{ $review->product->name }} - {{ $review->rating }}/5</p>
            <p>{{ $review->comment }}</p>
            <a href="{{ route('reviews.show', $review->id) }}">Ver más</a>
        </div>
    @endforeach
@endsection