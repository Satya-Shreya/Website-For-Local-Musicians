<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Musician extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'musicians';

    protected $fillable = [
        'name', 'email', 'password', 'role', 'about', 'genres',
        'instruments', 'influences', 'experience', 'profile_image',
        'video_urls', 'audio_urls'
    ];

    public function upcomingShows()
    {
        return $this->hasMany(UpcomingShow::class, 'musician_id');
    }
}

