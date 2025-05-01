<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Resort Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 mb-4">
        <a class="navbar-brand" href="{{ route('admin.home') }}">Admin Panel</a>
        <div class="ms-auto">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
