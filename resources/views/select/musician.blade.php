<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Local Music Platform</title>
    <style>
        button {
            padding: 15px 25px;
            margin: 20px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Welcome to Local Music Platform</h1>

    <div>
    <h2>Musician</h2>
    <a href="{{ route('musician.login') }}">Login</a> |
    <a href="{{ route('musician.register') }}">Sign Up</a>
    </div>
</body>
</html>
