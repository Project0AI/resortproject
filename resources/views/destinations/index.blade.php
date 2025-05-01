<!DOCTYPE html>
<html>
<head>
    <title>Destinations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Attraction Destinations</h1>

        <div class="row">
            @foreach ($destinations as $destination)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ $destination->picture }}" class="card-img-top" alt="{{ $destination->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $destination->name }}</h5>
                            <a href="{{ url('/destinations/'.$destination->id.'/resorts') }}" class="btn btn-primary w-100">View Resorts</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</body>
</html>
