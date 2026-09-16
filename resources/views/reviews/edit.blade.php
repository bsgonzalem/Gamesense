@extends('layouts.app')
@section('content')
    <form action="{{ route('reviews.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')

        <select name="rating">
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}" {{ $review->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>

        <textarea name="comment">{{ $review->comment }}</textarea>
        <button type="submit">Actualizar</button>
    </form>
@endsection