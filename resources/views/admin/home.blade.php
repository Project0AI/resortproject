<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>

    <ul>
        <li><a href="{{ route('destinations.index') }}">Manage Destinations</a></li>
        <li><a href="{{ route('resorts.index') }}">Manage Resorts</a></li>
        <li><a href="{{ route('menus.index') }}">Manage Menus</a></li>
    </ul>
</body>
</html>
