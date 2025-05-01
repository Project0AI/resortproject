@extends('layouts.app')

@section('title', 'Edit Destination')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Destination</h2>

    <form method="POST" action="{{ route('destinations.update', $destination->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Destination Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $destination->name }}" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Change Picture (optional)</label>
            <input type="file" name="picture" id="picture" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Destination</button>
        <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
