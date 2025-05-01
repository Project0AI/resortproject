@extends('layouts.app')

@section('title', 'All Destinations')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>All Destinations</h2>
    <a href="{{ route('destinations.create') }}" class="btn btn-primary">Add Destination</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Picture</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($destinations as $destination)
            <tr>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->name }}</td>
                <td><img src="{{ asset('storage/' . $destination->picture) }}" width="100"></td>
                <td>
                    <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
