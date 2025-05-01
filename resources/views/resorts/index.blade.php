<!DOCTYPE html>
<html>
<head>
    <title>Resorts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Resorts in {{ $destination->name }}</h1>

        <div class="row">
            @foreach ($resorts as $resort)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ $resort->picture }}" class="card-img-top" alt="{{ $resort->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $resort->name }}</h5>
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/resorts/'.$resort->id.'/menus') }}" class="btn btn-info">View Menu</a>
                                <a href="{{ url('/resorts/'.$resort->id.'/book') }}" class="btn btn-success">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('storage/' . $resort->picture) }}" width="150">

            @endforeach
        </div>

        <a href="{{ url('/') }}" class="btn btn-secondary mt-4">← Back to Destinations</a>
    </div>
</body>
</html>
