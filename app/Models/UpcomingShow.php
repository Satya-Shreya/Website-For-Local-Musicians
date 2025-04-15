<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class UpcomingShow extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'upcoming_shows';

    protected $fillable = [
        'musician_id', 'place', 'date', 'time', 'price'
    ];
}

