

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ url('/') }}" class="brand-link text-center">
                {{--<img src="#" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
                     {{--style="opacity: .8">--}}
                <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        {{--<img src="#" class="img-circle elevation-2" alt="User Image">--}}
                    </div>
                    <div class="info">
                        <a href="{{ url('/') }}" class="d-block">{{ Auth::check() ? Auth::user()->name:'' }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">GENERAL</li>
                        <li class="nav-item has-treeview">
                            <a href="{{ url('dashboard') }}" class="nav-link is-a {{ Request::is('dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">CONTENT</li>

                        @permission('read-events')
                        <li class="nav-item has-treeview {{ Request::is('events/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('events/*') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-paper-plane"></i>
                                <p>
                                    Manage Event
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: {{ Request::segment(2) == 'post' ? 'block':'' }}">

                                @permission('create-events')
                                <li class="nav-item">
                                    <a href="{{ URL::to('events/create') }}" class="nav-link {{ Request::is('events/create') ? 'active' : '' }}">
                                        <i class="fa fa-plus-circle nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                                @endpermission
                                <li class="nav-item">
                                    <a href="{{ URL::to('events/published') }}" class="nav-link {{ Request::is('events/published') ? 'active' : '' }}">
                                        <i class="fa fa-file-text-o nav-icon"></i>
                                        <p>Published</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ URL::to('events/drafts') }}" class="nav-link  {{ Request::is('events/drafts') ? 'active' : '' }}">
                                        <i class="fa fa-clipboard nav-icon"></i>
                                        <p>Drafts</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admz/category/post') }}" class="nav-link">
                                        <i class="fa fa-inbox nav-icon"></i>
                                        <p>Archived</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endpermission
                        <li class="nav-header">ADMINISTRATION</li>

                        @permission('read-users')
                        <li class="nav-item has-treeview {{ Request::is('users') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Manage Users
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: {{ Request::segment(2) == 'post' ? 'block':'' }}">
                                @permission('read-users')
                                <li class="nav-item">
                                    <a href="{{ URL::to('users') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
                                        <i class="fa fa-address-book-o nav-icon"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                                @endpermission
                            </ul>
                        </li>
                        @endpermission

                        @role('superadministrator')
                        <li class="nav-item has-treeview {{ Request::is('roles') ? 'menu-open' : '' }} {{ Request::is('permissions') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('roles') ? 'active' : '' }} {{ Request::is('permissions') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-wrench"></i>
                                <p>
                                    Roles and Permission
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: {{ Request::segment(2) == 'post' ? 'block':'' }}">
                                <li class="nav-item">
                                    <a href="{{ URL::to('roles') }}" class="nav-link {{ Request::is('roles') ? 'active' : '' }}">
                                        <i class="fa fa-angle-double-up nav-icon"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('permissions') }}" class="nav-link {{ Request::is('permissions') ? 'active' : '' }}">
                                        <i class="fa fa-unlock-alt nav-icon"></i>
                                        <p>Permissions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endrole
                        <li class="nav-item has-treeview">
                            <a href="{{ url('admz/config') }}" class="nav-link {{ Request::segment(2) == 'config' ? 'active':'' }}">
                                <i class="nav-icon fa fa-gears"></i>
                                <p>
                                    Config
                                </p>
                            </a>
                        </li>
                      <li class="nav-header">ACTION</li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="nav-icon fa fa-sign-out"></i>
                            <p class="text">{{ __('Sign Out') }}</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                </nav>
            </div>
        </aside>