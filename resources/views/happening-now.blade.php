@extends('layouts.app')

@section('title', '| Happening')

@section('content')
      <div class="row" style="margin-top: -50px">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-9"> 
          <div class="container">
            <h5>Event Happening Now</h5>
            <hr>

            @forelse ($events as $event)
            <div class="card">
                @if($event->image)
                   <img class="event-list" src="{{ asset('media/images/' . $event->image) }}">
                @else
                    <img class="event-list" src="{{ asset('images/noimage.gif') }}">
                @endif
              <div class="card-body tags">
                <h5 class="card-title"> {{ $event->title }} </h5>
                <p class="card-text">
                  Organized by <a href="">{{ $event->user->name }}</a> on 
                    <a style="color: dark; font-weight: bold">
                      {{ $event->start_at->toFormattedDateString() }} 
                    </a> until
                    <a style="color: dark; font-weight: bold"> 
                      {{ $event->end_at->toFormattedDateString() }}
                    </a>.
                </p>
                <p class="card-text">
                  Short Description about the event
                </p>
                  <a href="#">#Business</a> <a href="#">#Business</a> <a href="#">#Business</a> <a href="#">#Business</a> <a href="#">#Business</a>
                <hr>
                <a href=" {{ url('event/' . $event->slug) }} ">Read more</a>
                <div class="d-flex pull-right">
                      <div>Event ends in {{ $event->end_at->diffForHumans() }}</div>
                </div>
              </div>
            </div><br>
              @empty
              <div class="card">
                <img class="event-list" src="{{ asset('images/notfound.png') }}" style="height: 350px">
              <div class="card-body">
                <h5 class="card-title"> I'm Sorry </h5>
                <p class="card-text">
                  There are no posts to view at the moment. Please come back or try again later.
                </p>
              </div>
            </div>
              @endforelse

              {{ $events->links() }}
          </div>
        </main>

        @include('partials.content-aside')

      </div>
@endsection
