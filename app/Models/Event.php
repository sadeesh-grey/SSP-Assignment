<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'event_name',
        'start_datetime',
        'end_datetime',
        'category',
        'event_count',
        'price',
        'contact',
        'address',
        'description',
        'price'
    ];
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
