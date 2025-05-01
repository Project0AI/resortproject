@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Resorts in {{ $destination->name }}</h2>
    <div class="row">
    @foreach ($destination->resorts as $resort)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                <img src="{{ asset('storage/' . $resort->picture) }}" alt="{{ $resort->name }}" width="100">
                <div class="card-body">
                        <h5 class="card-title">{{ $resort->name }}</h5>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('user.menus', $resort->id) }}" class="btn btn-outline-primary">View Menu</a>
                            <a href="{{ route('user.booking', $resort->id) }}" class="btn btn-outline-success">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ route('user.home') }}" class="btn btn-secondary mt-4">← Back to Destinations</a>
</div>
@endsection








