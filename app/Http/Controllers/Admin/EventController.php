<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;

use App\Http\Controllers\Controller;
use App\Event;
use App\User;
use Carbon\Carbon;

use Image;
use Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'slug' => 'required|alpha_dash|min:5|max:255|unique:events,slug',
            'title' => 'required|min:5|max:255',
            'date_range' => 'required'
        ]);

        $event = new Event;

        if ($image = Input::file('image')) {
            $filename = $image->hashName();
            $path_thumb = public_path('media/thumb/' . $filename);
            Image::make($image->getRealPath())->resize(350, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(350, 177)->save($path_thumb);

            $path = public_path('media/images/' . $filename);
            Image::make($image->getRealPath())->save($path);
            $event->image = $filename;
        }

        $splitDate = explode(' - ', $request->date_range, 2);
        $start_date = date('Y-m-d', strtotime($splitDate[0]));
        $end_date = date('Y-m-d', strtotime($splitDate[1]));

        $event->slug = $request->slug;
        $event->title = $request->title;
        $event->user_id = Auth::user()->id;
        $event->content = $request->description;
        $event->start_at = $start_date;
        $event->end_at = $end_date;
        $event->status = $request->status; // published or drafts, boolean
        $event->plugin = $request->dataPlugin;

        if (empty($request->seo)) {
            $event->seo = strip_tags(str_limit($request->description, 150));
        } else {
            $event->seo = $request->seo;
        }
        if (empty($request->keyword)) {
            $event->keyword = $request->title;
        } else {
            $event->keyword = $request->keyword;
        }
        $event->save();

        if ($request->publish == 1) {
            $status = 'Publish';
        } elseif ($request->publish == 0) {
            $status = 'Draft';
        }

        $redirectTo = 'events/drafts';
        if ($request->status == true) {
            $redirectTo = 'events/published';
        }

        return redirect($redirectTo)->with('message', 'Success Update');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        $meta = [
            'title' => 'Edit Post',
            'keyword' => 'dasboard',
            'description' => 'dasboard',
        ];

        return view('admin.events.edit')
            ->with([
                'event' => $event,
                'meta' => $meta
                ]);

        /*return view('admin.post.edit',
            [
                'data' => $data,
                'meta' => $meta
            ]
        );*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        if ($request->input('slug') == $event->slug) {
            # validation code...
        } else {
            $this->validate($request, [
                'slug' => 'required|alpha_dash|min:5|max:255|unique:events,slug'
                ]);
        }

        if ($image = Input::file('image')) {
            $filename = $image->hashName();
            $path_thumb = public_path('media/thumb/' . $filename);
            Image::make($image->getRealPath())->resize(350, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(350, 177)->save($path_thumb);

            $path = public_path('media/images/' . $filename);
            Image::make($image->getRealPath())->save($path);

            $oldImage = $event->image;
            if ($oldImage) {
                if (file_exists(public_path('media/images/' . $oldImage))) {
                    unlink('media/images/' . $oldImage);
                }
                if (file_exists(public_path('media/thumb/' . $oldImage))) {
                    unlink('media/thumb/' . $oldImage);
                }
            }
            $event->image = $filename;
        } elseif ($request->updateImg1 == '0') {
            $oldImage = $event->image;
            if ($oldImage) {
                if (file_exists(public_path('media/images/' . $oldImage))) {
                    unlink('media/images/' . $oldImage);
                }
                if (file_exists(public_path('media/thumb/' . $oldImage))) {
                    unlink('media/thumb/' . $oldImage);
                }
            }
            $event->image = null;
        }

        $splitDate = explode(' - ', $request->date_range, 2);
        $start_date = date('Y-m-d', strtotime($splitDate[0]));
        $end_date = date('Y-m-d', strtotime($splitDate[1]));

        $event->slug = $request->slug;
        $event->title = $request->title;
        $event->user_id = Auth::user()->id;
        $event->content = $request->description;
        $event->start_at = $start_date;
        $event->end_at = $end_date;
        $event->status = $request->status; // published or drafts, boolean
        $event->plugin = $request->dataPlugin;
        if (empty($request->seo)) {
            $event->seo = strip_tags(str_limit($request->description, 150));
        } else {
            $event->seo = $request->seo;
        }
        if (empty($request->keyword)) {
            $event->keyword = $request->title;
        } else {
            $event->keyword = $request->keyword;
        }
        $event->save();

        $redirectTo = 'events/drafts';
        if ($request->status == true) {
            $redirectTo = 'events/published';
        }

        return redirect($redirectTo)->with('message', 'Success Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $oldImage = $event->image;
        if ($oldImage) {
            if (file_exists(public_path('media/images/' . $oldImage))) {
                unlink('media/images/' . $oldImage);
            }
            if (file_exists(public_path('media/thumb/' . $oldImage))) {
                unlink('media/thumb/' . $oldImage);
            }
        }
        $event->delete();

        return back()->with('message', 'Success Delete');
    }

    /**
     * Display the specified resource with slug.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function getSingle($slug)
    {
        // fetch from db based on slug
        $event = Event::where('slug', '=', $slug)->where('status', '=', 1)->firstOrFail();
        $comments = $event->comments()->paginate(6);
        $threeRecentEvent = Event::orderBy('created_at', 'desc')->where('status', '=', 1)->take(3)->get();
        //$comment = $event->comment->paginate(15);

        // return the view and pass in the post object
        return view('event')
                ->withEvent($event)
                ->withComments($comments)
                ->withThreeRecentEvent($threeRecentEvent);
    }

    /**
     * Display a listing of the published resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function getPublished($value='')
    {
        // get current logged in user
        $uid = \Auth::user()->id;

        // get all published the events from this user
        $events = User::find($uid)->events->where('status', '=', 1);

        // load the view and pass the events
        return view('admin.events.index')
            ->with('events', $events);
    }

    /**
     * Display a listing of the resource's drafts
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function getDrafts($value='')
    {
        // get current logged in user
        $uid = \Auth::user()->id;

        // get all the drafts events from this user
        $events = User::find($uid)->events->where('status', '=', 0);

        // load the view and pass the events
        return view('admin.events.index')
            ->with('events', $events);
    }
}
