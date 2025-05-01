@extends('layouts.app')

@section('title', 'Create Destination')

@section('content')
<div class="container">
    <h2 class="mb-4">Create New Destination</h2>

    <form method="POST" action="{{ route('destinations.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Destination Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" name="picture" id="picture" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Destination</button>
        <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
