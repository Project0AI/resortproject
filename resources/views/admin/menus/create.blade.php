@extends('layouts.app')

@section('title', 'Add Menu')

@section('content')
<div class="container">
    <h2 class="mb-4">Add New Menu</h2>

    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="resort_id" class="form-label">Resort</label>
            <select name="resort_id" id="resort_id" class="form-select" required>
                @foreach($resorts as $resort)
                    <option value="{{ $resort->id }}">{{ $resort->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Menu Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" name="picture" id="picture" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Create Menu</button>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
