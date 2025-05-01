@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4 shadow">
        <img src="{{ $resort->picture }}" class="card-img-top" alt="{{ $resort->name }}" style="max-height: 400px; object-fit: cover;">
        <div class="card-body">
            <h2 class="card-title">{{ $resort->name }}</h2>
            <p class="card-text">
                <strong>Location:</strong> {{ $resort->location }}<br>
                <strong>Phone:</strong> {{ $resort->phone_number }}
            </p>
            <a href="tel:{{ $resort->phone_number }}" class="btn btn-success">📞 Call Now</a>
            <a href="{{ route('user.resorts', $resort->destination_id) }}" class="btn btn-outline-secondary ms-2">← Back to Resorts</a>
        </div>
    </div>
</div>
@endsection
