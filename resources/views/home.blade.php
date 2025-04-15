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
        <a href="{{ route('musician.select') }}">
            <button>Musician</button>
        </a>

        <a href="{{ route('user.select') }}">
            <button>User</button>
        </a>
    </div>
</body>
</html>
