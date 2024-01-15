<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'nb_seats', 'image', 'location', 'start_date', 'end_date'];
    protected $dates = ['start_date', 'end_date'];
    protected $casts = [
        'image' => 'json',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getImagePathAttribute()
    {
        // If image is not set or is not an array, return null
        if (!isset($this->attributes['image']) || !is_array($this->attributes['image'])) {
            return null;
        }

        // Return the path from the image array
        return '/storage/images/' . $this->attributes['image']['path'];
    }
}
