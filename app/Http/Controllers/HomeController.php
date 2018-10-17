<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // get all published event and 3 recent published event
        $events = Event::all()->where('status', '=', 1);
        $threeRecentEvent = Event::orderBy('created_at', 'desc')->where('status', '=', 1)->take(3)->get();

        return view('home')
                ->withEvents($events)
                ->withThreeRecentEvent($threeRecentEvent);
    }
}
