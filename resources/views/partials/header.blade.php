    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name', 'Laravel') }}</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('upcoming') }}" class="nav-link {{ Request::is('event/*') ? 'active' : '' }} ">Events</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('search') }}" class="nav-link {{ Request::is('search') ? 'active' : '' }}">Search</a>
                        </li>

                        <div class="navbar-text"><a href="#" class="search-btn"></a></div>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <h6 class="dropdown-header">
                                      General
                                    </h6>
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                      Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                      Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">
                                      Action
                                    </h6>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </div>
      </nav>
    </header>