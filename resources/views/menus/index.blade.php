<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Menu at {{ $resort->name }}</h1>

        <div class="list-group">
            @foreach ($menus as $menu)
                <div class="list-group-item">
                    <h5>{{ $menu->name }}</h5>
                    <p>{{ $menu->description }}</p>
                </div>
            @endforeach
        </div>

        <a href="{{ url('/destinations/'.$resort->destination_id.'/resorts') }}" class="btn btn-secondary mt-4">← Back to Resorts</a>
    </div>
</body>
</html>
