<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use App\Event;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $threeUpcomingEvents = Event::where('status', '=', 1)
                            ->whereDate('start_at', '>', Carbon::today()->toDateString())
                            ->orderBy('start_at', 'ASC')
                            ->take(3)->get();

        return view('home')->withEvents($threeUpcomingEvents);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming()
    {   
        // get all published event and 3 recent published event
        $upcomingEvents = Event::where('status', '=', 1)
                            ->whereDate('start_at', '>', Carbon::today()->toDateString())
                            ->orderBy('start_at', 'ASC')
                            ->paginate(15);
        $threeRecentEvent = Event::orderBy('created_at', 'desc')->where('status', '=', 1)->take(3)->get();

        return view('upcoming')
                ->withEvents($upcomingEvents)
                ->withThreeRecentEvent($threeRecentEvent);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function happening()
    {   
        // get all published event and 3 recent published event
        $UpcomingEvents = Event::where('status', '=', 1)
                            ->whereDate('start_at', '<', Carbon::now())
                            ->whereDate('end_at', '>', Carbon::now())
                            ->orderBy('start_at', 'ASC')
                            ->paginate(15);


        $UpcomingEvents = Event::where('status', '=', 1)->whereDate('start_at', '<', Carbon::now())->orderBy('start_at', 'ASC')->paginate(15);

        $threeRecentEvent = Event::orderBy('created_at', 'desc')->where('status', '=', 1)->take(3)->get();

        return view('upcoming')
                ->withEvents($UpcomingEvents)
                ->withThreeRecentEvent($threeRecentEvent);
    }


}
