@extends('layouts.app')

@section('title', 'All Menus')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>All Menus</h2>
    <a href="{{ route('menus.create') }}" class="btn btn-primary">Add Menu</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Resort</th>
            <th>Name</th>
            <th>Description</th>
            <th>Picture</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->resort->name ?? 'N/A' }}</td>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->description }}</td>
                <td>
                    @if ($menu->picture)
                        <img src="{{ asset('storage/' . $menu->picture) }}" width="100">
                    @else
                        No image
                    @endif
                </td>
                <td>
                    <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this menu item?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
