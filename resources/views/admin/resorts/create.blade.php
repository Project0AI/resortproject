@extends('layouts.app')

@section('title', 'Add Resort')

@section('content')
<h2>Add New Resort</h2>

<form action="{{ route('resorts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="destination_id" class="form-label">Destination</label>
        <select name="destination_id" class="form-select" required>
            @foreach($destinations as $destination)
                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Resort Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" name="picture" class="form-control">
        </div>

    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" name="location" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="text" name="phone_number" class="form-control" required>
    </div>

    <button class="btn btn-success">Create Resort</button>
</form>
@endsection
