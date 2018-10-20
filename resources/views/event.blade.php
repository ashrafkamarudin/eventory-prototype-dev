@extends('layouts.app')

@section('title', '| Event')

@section('content')

      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-9"> 
          <div class="container">
            <div class="post-single">
              <div class="post-thumbnail">
                @if($event->image)
                    <img src="{{ asset('media/images/' . $event->image) }}" alt="..." class="img-fluid">
                @else
                    <img src="{{ asset('images/noimage.gif') }}" alt="..." class="img-fluid">
                @endif
              </div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="category"><a href="#">Business</a><a href="#">Financial</a></div>
                </div>
                <h1>{{ $event->title }}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{ asset('bootstrap-blog/img/user.svg') }}" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{ $event->user->name }}</span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> {{ $event->created_at->diffForHumans() }} </div>
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
                <div class="post-body">
                  {!! $event->content !!}
                </div>

                <div class="post-tags"><a href="#" class="tag">#Business</a><a href="#" class="tag">#Tricks</a><a href="#" class="tag">#Financial</a><a href="#" class="tag">#Economy</a></div>

        
                <div class="post-comments" id="comment">
                  <header>
                    <h3 class="h6">Post Comments<span class="no-of-comments">(3)</span></h3>
                  </header>

                  @forelse($comments as $comment)
                    <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                      <div class="user d-flex align-items-center">
                        <div class="image"><img src="{{ asset('bootstrap-blog/img/user.svg') }}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title"><strong>{{ $comment->name }}</strong><span class="date">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</span></div>
                      </div>
                    </div>
                    <div class="comment-body">
                      <p>{{ $comment->comment }}</p>
                    </div>
                  </div>
                  @empty
                   <div class="comment">
                    <div class="comment-body">
                      <p>No Comment for this post yet.</p>
                    </div>
                  </div>
                  @endforelse


                  {{ $comments->links() }}


                </div>
                <div class="add-comment" id="add">
                  <header>
                    <h3 class="h6">Leave a reply</h3>
                  </header>
                  <form method="post" action="{{ url('comments#add') }}" class="commenting-form">
                    @method('POST')
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="text" name="name" id="username" placeholder="Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                        <div class="error text-red">{{ $errors->first('name') }}</div>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="email" name="email" id="useremail" placeholder="Email Address (will not be published)" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                        <div class="error text-red">{{ $errors->first('email') }}</div>
                      </div>
                      <div class="form-group col-md-12">
                        <textarea name="comment" id="usercomment" placeholder="Type your comment" class="form-control {{ $errors->has('comment') ? ' is-invalid' : '' }}"></textarea>
                        <div class="error text-red">{{ $errors->first('comment') }}</div>
                      </div>
                      <div class="form-group col-md-12">
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        <button type="submit" class="btn btn-secondary">Submit Comment</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
        <aside class="col-lg-3">
          <!-- Widget [Search Bar Widget]-->
          <div class="widget search bg-white">
            <header>
              <h3 class="h6">Search the site</h3>
            </header>
            <form action="#" class="search-form">
              <div class="form-group">
                <input type="search" placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
          <!-- Widget [Latest Posts Widget]        -->
          <div class="widget latest-posts bg-white">
            <header>
              <h3 class="h6">Latest Posts</h3>
            </header>
            <div class="blog-posts"><a href="#">
              @foreach($threeRecentEvent as $recentEvent)
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="{{ asset('media/thumb/' . $event->image) }}" alt="..." class="img-fluid"></div>
                  <div class="title"><strong> {{ $recentEvent->title }} </strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="#">
             @endforeach </a></div>
          </div>
          <!-- Widget [Categories Widget]-->
          <div class="widget categories bg-white">
            <header>
              <h3 class="h6">Categories</h3>
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
              <h3 class="h6">Tags</h3>
            </header>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
            </ul>
          </div>
        </aside>
      </div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    if (window.location.hash != null && window.location.hash != '') 
        $('html, body').animate({
          scrollTop: $(window.location.hash).offset().top
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          //window.location.hash = hash;
        });
});
</script>
@endsection