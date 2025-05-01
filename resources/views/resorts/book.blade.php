<!DOCTYPE html>
<html>
<head>
    <title>Book Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Book {{ $resort->name }}</h1>

        <div class="card shadow-sm p-4">
            <p><strong>Location:</strong> {{ $resort->location }}</p>
            <p><strong>Phone:</strong> {{ $resort->phone_number }}</p>

            <a href="tel:{{ $resort->phone_number }}" class="btn btn-success w-100 mb-3">📞 Call Now</a>
            <a href="{{ url('/destinations/'.$resort->destination_id.'/resorts') }}" class="btn btn-secondary w-100">← Back to Resorts</a>
        </div>
    </div>
</body>
</html>
