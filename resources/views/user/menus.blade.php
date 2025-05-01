@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Menu at {{ $resort->name }}</h2>
    <div class="row">
    @foreach ($resort->menus as $menu)            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->name }}</h5>
                        <p class="card-text">{{ $menu->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ route('user.resorts', $resort->destination_id) }}" class="btn btn-secondary">← Back to Resorts</a>
</div>
@endsection





