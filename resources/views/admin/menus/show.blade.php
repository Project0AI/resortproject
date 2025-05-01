@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Menu Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $menu->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Resort: {{ $menu->resort->name }}</h6>
            <p class="card-text">{{ $menu->description }}</p>
        </div>
    </div>

    <a href="{{ route('menus.index') }}" class="btn btn-secondary mt-3">← Back to Menus</a>
</div>
@endsection
