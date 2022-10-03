<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    function bookevent()
    {
        $attributes = request()->validate([
            'event_id' => 'required',
            'total' => 'required',
            'book_for' => 'required',
            'c_number'=>'required'
        ]);

        $attributes["user_id"] = Auth::user('web')->id;

        $booking = Booking::create($attributes);
        // auth()->user()->notify(new \App\Notifications\EventBookSuccess($booking));
        session()->flash('success','Registered!');

        return redirect("/profile");


    }
}
