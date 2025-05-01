@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Attraction Destinations</h2>
    <div class="row">
        @foreach ($destinations as $destination)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    @if ($destination->picture)
                        <img src="{{ asset('storage/' . $destination->picture) }}" class="card-img-top" alt="{{ $destination->name }}">
                    @else
                        <img src="https://via.placeholder.com/400x200?text=No+Image" class="card-img-top" alt="No image">
                    @endif
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="card-text">Resorts Available ({{ $destination->resorts->count() }})</p>
                        <a href="{{ route('user.resorts', $destination->id) }}" class="btn btn-primary mt-auto">View Resorts</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
