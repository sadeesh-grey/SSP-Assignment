<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function addcategories()
    {
        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $attributes = Categorie::create($attributes);


       return redirect('/admin/category')->with('success','Added Successfully');
    }

    function category()
    {
        $eventcategorie= Categorie::all();
        return view('admin.index',['eventcategorie'=>$eventcategorie]);
    }

    function addevents(Request $req)
    {


        $attributes = request()->validate([

            'event_name'=>'required',
            'start_datetime'=>'required',
            'end_datetime'=>'required',
            'category'=>'required',
            'contact'=>'required',
            'price'=>'required',
            'address'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        //
    $attributes = Event::create($attributes);



       return redirect('/admin/index')->with('success','Added Successfully');
    }

    function allEvents()
    {
        $events= Event::whereDate('start_datetime',date('Y-m-d'))->get();
        // $events->event_count = $events->event_count + 1;

        return view('web.allevent',[
            'events'=>$events
        ]);
        // echo date('Y-m-d');

    }

    function getEventsforCategory($categoty)
    {

        $events= Event::where('category',$categoty)->whereDate('start_datetime',date('Y-m-d'))->get();

        return view('web.allevent',[
            'events'=>$events
        ]);
    }

    function comingup()
    {
        // $webevent =DB::table('events')->paginate();
        $comingup= Event::whereDate('start_datetime','>',date('Y-m-d'))->get();
        return view('web.comingup',['comingup'=>$comingup]);
        // dd($futureevent);
    }

    function eventDetails($id)
    {
        // $eventbook= Event::all();
        // return view('web.booking',['eventbook'=>$eventbook]);

        $event = Event::where('id',$id)->first();
        $event->event_count = $event->event_count + 1;
        $event->update();
        // dd($booking);
        return view('web.book',[
            'event'=>$event,
        ]);
    }
    function popularevents()
    {
        $popularevents = Event::orderBy('event_count', 'DESC')->limit(3)->get();

        return view('web.index',[
            'popularevents'=>$popularevents,
        ]);
    }

}
