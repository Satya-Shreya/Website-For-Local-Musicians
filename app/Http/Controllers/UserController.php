<?php

namespace App\Http\Controllers;

use App\Models\Musician;
use App\Models\UpcomingShow;

class UserController extends Controller
{
    public function showAllMusicians()
    {
        $musicians = Musician::with('upcomingShows')->get();
        return view('user.musicians', compact('musicians'));
    }

    public function bookEvent($showId)
    {
        $user = auth()->user();
        $user->bookedEvents()->attach($showId);
        return redirect()->back()->with('success', 'Event booked successfully!');
    }
}
