<h2>All Musicians</h2>
@foreach ($musicians as $musician)
    <h3>{{ $musician->name }}</h3>
    <p>About: {{ $musician->about }}</p>
    <p>Instruments: {{ $musician->instruments }}</p>
    <p>Skills: {{ $musician->skills }}</p>
    <p>Experience: {{ $musician->experience }}</p>
    
    <h4>Upcoming Shows</h4>
    @foreach ($musician->upcomingShows as $show)
        <p>Place: {{ $show->place }} | Date: {{ $show->date }} | Time: {{ $show->time }} | Price: {{ $show->price }}</p>
        <form method="POST" action="{{ route('user.book_event', $show->id) }}">
            @csrf
            <button type="submit">Book This Event</button>
        </form>
    @endforeach
@endforeach
