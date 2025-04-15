<!DOCTYPE html>
<html>
<head>
    <title>Musician Login</title>
</head>
<body>
    <h2>Musician Login</h2>
    
    <form method="POST" action="{{ url('/musician/login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>

    @if ($errors->any())
        <div>
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif
</body>
</html>
