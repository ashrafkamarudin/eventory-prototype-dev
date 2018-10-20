@extends('layouts.app')

@section('content')
      <div class="row" style="margin-top: -50px">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-9"> 
          <div class="container">
            <h5>Latest Event</h5>
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
                  Some info about the post
                </p>
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
                  </ul>
                <hr>
                <a href=" {{ url('event/' . $event->slug) }} ">Read more</a>
                <div class="d-flex pull-right">
                      <div>Event starts in {{ $event->start_at->diffForHumans() }}</div>
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
        <aside class="col-lg-3" data-spy="affix">
          <div class="sticky">
            
          <!-- Widget [Categories Widget]-->
          <div class="widget categories bg-white">
            <header>
              <h3 class="h6">Popular Categories</h3>
            </header>
            <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
          </div>
          <!-- Widget [Tags Cloud Widget]-->
          <div class="widget tags bg-white">       
            <header>
              <h3 class="h6">Popular Tags</h3>
            </header>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
            </ul>
          </div>

          </div>
        </aside>
      </div>
@endsection
