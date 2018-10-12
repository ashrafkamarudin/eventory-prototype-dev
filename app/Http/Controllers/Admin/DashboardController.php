<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display admin's dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get current logged in user
        $uid = \Auth::user()->id;

        // get all the events from this user
        //$events = User::find($uid)->events;

        // load the view and pass the events
        return view('admin.home');
    }
}
