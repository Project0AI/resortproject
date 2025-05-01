@extends('layouts.app')

@section('title', 'Edit Resort')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Resort</h2>

    <form action="{{ route('resorts.update', $resort->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="destination_id" class="form-label">Destination</label>
            <select name="destination_id" id="destination_id" class="form-select" required>
                @foreach($destinations as $destination)
                    <option value="{{ $destination->id }}" {{ $resort->destination_id == $destination->id ? 'selected' : '' }}>
                        {{ $destination->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Resort Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $resort->name }}" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Change Picture (optional)</label>
            <input type="file" name="picture" id="picture" class="form-control">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ $resort->location }}" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $resort->phone_number }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Resort</button>
        <a href="{{ route('resorts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
<!-- fixed edit resort page, fix edit destination next -->