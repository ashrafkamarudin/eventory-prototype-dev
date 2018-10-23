<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ config('app.name', 'Laravel') }} | Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    @include('partials.head')

  </head>
  <body>

    @include('partials.header')

        <!-- Hero Section-->
    <section style="background: url({{ asset('bootstrap-blog/img/hero.jpg') }}); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h3><i>WE GATHER</i></h3>
            <h1>Event's happening near you !</h1>
            <h2><i>Specially for you.</i></h2>
            <a href="#" class="hero-link">Discover More</a>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="h3">We work for you !</h2>
            <p class="text-big">We at <a href="#">{{ config('app.name', 'Laravel') }}</a> <strong>provides you a platform</strong> that gather events in one place <strong>so you don't miss out on Special Event's happening around you !</strong>. You can also find out more details like the durations, organiser and venue about the events here. Come and check these events now !</p>
          </div>
        </div>
      </div>
    </section>
    <section class="featured-posts no-padding-top">
      <div class="container">
        <!-- Post-->
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="#">Business</a><a href="#">Technology</a></div>
                  <a href="{{ url('event/' . $events[0]->slug) }}">
                    <h2 class="h4">{{ $events[0]->title }}</h2></a>
                </header>
                <p>{{ str_limit($events[0]->content,150) }}</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{ asset('bootstrap-blog/img/avatar-1.jpg') }}" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{ $events[0]->user->name }}</span></div></a>
                  <div class="date"><i class="icon-clock"></i>{{ $events[0]->start_at->diffForHumans() }}</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><img src="{{ asset('bootstrap-blog/img/featured-pic-1.jpeg') }}" alt="..."></div>
        </div>
        <!-- Post        -->
        <div class="row d-flex align-items-stretch">
          <div class="image col-lg-5"><img src="{{ asset('bootstrap-blog/img/featured-pic-2.jpeg') }}" alt="..."></div>
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                    <h2 class="h4">{{ $events[1]->title }}</h2></a>
                </header>
                <p>{{ str_limit($events[1]->content,150) }}</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{ asset('bootstrap-blog/img/avatar-2.jpg') }}" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{ $events[1]->user->name }}</span></div></a>
                  <div class="date"><i class="icon-clock"></i>{{ $events[1]->start_at->diffForHumans() }}</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
        </div>
        <!-- Post                            -->
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                    <h2 class="h4">{{ $events[2]->title }}</h2></a>
                </header>
                <p>{{ str_limit($events[2]->content,150) }}</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{ asset('bootstrap-blog/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{ $events[1]->user->name }}e</span></div></a>
                  <div class="date"><i class="icon-clock"></i> {{ $events[2]->start_at->diffForHumans() }}</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><img src="{{ asset('bootstrap-blog/img/featured-pic-3.jpeg') }}" alt="..."></div>
        </div>
      </div>
    </section>
    <!-- Divider Section-->
    <section style="background: url({{ asset('bootstrap-blog/img/divider-bg.jpg') }}); background-size: cover; background-position: center bottom" class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1>Got event to advertise ?<h1><h2>Help us help you gather more attention to you and YOUR EVENT !</h2><a href="#" class="hero-link">Find Out More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Posts -->
    <section class="latest-posts"> 
      <div class="container">
        <header> 
          <h2>Latest from the blog</h2>
          <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header>
        <div class="row">
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('bootstrap-blog/img/blog-1.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Business</a></div>
              </div><a href="post.html">
                <h3 class="h4">Ways to remember your important ideas</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('bootstrap-blog/img/blog-2.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Technology</a></div>
              </div><a href="post.html">
                <h3 class="h4">Diversity in Engineering: Effect on Questions</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('bootstrap-blog/img/blog-3.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Financial</a></div>
              </div><a href="post.html">
                <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Newsletter Section-->
    <section class="newsletter no-padding-top">    
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Subscribe to Newsletter</h2>
            <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-md-8">
            <div class="form-holder">
              <form action="#">
                <div class="form-group">
                  <input type="email" name="email" id="email" placeholder="Type your email address">
                  <button type="submit" class="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
      <div class="row">
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-1.jpg" data-fancybox="gallery" class="image"><img src="{{ asset('bootstrap-blog/img/gallery-1.jpg') }}" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-2.jpg" data-fancybox="gallery" class="image"><img src="{{ asset('bootstrap-blog/img/gallery-2.jpg') }}" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-3.jpg" data-fancybox="gallery" class="image"><img src="{{ asset('bootstrap-blog/img/gallery-3.jpg') }}" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-4.jpg" data-fancybox="gallery" class="image"><img src="{{ asset('bootstrap-blog/img/gallery-4.jp') }}g" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
      </div>
    </section>

    @include('partials.footer')
    @include('partials.js')

  </body>
</html>

<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});

$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})});

</script>
