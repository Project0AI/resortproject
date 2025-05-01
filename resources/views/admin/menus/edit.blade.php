@extends('layouts.app')

@section('title', 'Edit Menu')

@section('content')
<h2>Edit Menu</h2>

<form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="resort_id" class="form-label">Resort</label>
        <select name="resort_id" class="form-select" required>
            @foreach($resorts as $resort)
                <option value="{{ $resort->id }}" {{ $menu->resort_id == $resort->id ? 'selected' : '' }}>
                    {{ $resort->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Menu Name</label>
        <input type="text" name="name" class="form-control" value="{{ $menu->name }}" required>
    </div>

    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" class="form-control" name="picture">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" required>{{ $menu->description }}</textarea>
    </div>

    <button class="btn btn-primary">Update Menu</button>
</form>
@endsection
