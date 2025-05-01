@extends('layouts.app')

@section('title', 'All Resorts')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>All Resorts</h2>
    <a href="{{ route('resorts.create') }}" class="btn btn-primary">Add Resort</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Destination</th>
            <th>Picture</th>
            <th>Location</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($resorts as $resort)
            <tr>
                <td>{{ $resort->id }}</td>
                <td>{{ $resort->name }}</td>
                <td>{{ $resort->destination->name ?? 'N/A' }}</td>
                <td>
    @if($resort->picture)
    <td><img src="{{ asset('storage/' . $resort->picture) }}" width="100"></td>
    @else
        No image
    @endif
</td>
                <td>{{ $resort->location }}</td>
                <td>{{ $resort->phone_number }}</td>
                <td>
                    <a href="{{ route('resorts.edit', $resort->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('resorts.destroy', $resort->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this resort?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
