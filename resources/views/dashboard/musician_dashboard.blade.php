<!DOCTYPE html>
<html>
<head>
    <title>Musician Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ Auth::user()->name }}</h2>

    <p>You are logged in as a <strong>musician</strong>.</p>

    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
