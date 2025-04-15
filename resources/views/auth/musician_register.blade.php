<!DOCTYPE html>
<html>
<head>
    <title>Musician Register</title>
</head>
<body>
    <h2>Musician Sign Up</h2>
    
    <form method="POST" action="{{ url('/musician/register') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required><br><br>
        
        <button type="submit">Register</button>
    </form>

    @if ($errors->any())
        <div>
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif
</body>
</html>
