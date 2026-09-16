@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1>{{ $viewData['category']->getName() }}</h1>
        <p>{{ $viewData['category']->getDescription() }}</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        {{-- Products will be displayed here --}}
    </div>

</div>
@endsection