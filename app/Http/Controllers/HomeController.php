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
    {   // get all event
        $events = Event::all();
        $threeRecentEvent = Event::orderBy('created_at', 'desc')->take(3)->get();

        return view('home')
                ->withEvents($events)
                ->withThreeRecentEvent($threeRecentEvent);
    }
}
