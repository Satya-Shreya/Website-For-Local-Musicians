<h2>User Dashboard</h2>
<p>Welcome, {{ Auth::user()->name }}</p>
<a href="{{ route('logout') }}">Logout</a>
