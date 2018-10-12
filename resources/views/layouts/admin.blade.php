<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="{{ Auth::user()->name }}">
    <title></title>


      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 3 | Dashboard</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/font-awesome/css/font-awesome.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/dist/css/adminlte.min.css') }}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/iCheck/flat/blue.css') }}">
      <!-- Morris chart -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/morris/morris.css') }}">
      <!-- jvectormap -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
      <!-- Date Picker -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/datepicker/datepicker3.css') }}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/daterangepicker/daterangepicker-bs3.css') }}">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ asset('adminLTE-3/plugins/datatables/dataTables.bootstrap4.css') }}">


    <script src="{{ asset('admin/plugins/ckeditor/ckeditor.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('adminLTE-3/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('adminLTE-3/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('adminLTE-3/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ url('admz') }}" class="brand-link text-center">
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
                            <a href="{{ url('dashboard') }}" class="nav-link is-a {{ Request::is('home') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">CONTENT</li>
                        <li class="nav-item has-treeview {{ Request::is('events') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('events') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-edit"></i>
                                <p>
                                    Manage Event
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: {{ Request::segment(2) == 'post' ? 'block':'' }}">
                                <li class="nav-item">
                                    <a href="{{ URL::to('events') }}" class="nav-link {{ Request::is('events') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>Events - Published</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admz/category/post') }}" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>Events - Drafts</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">ADMINISTRATION</li>
                        <li class="nav-item has-treeview">
                            <a href="{{ url('admz/config') }}" class="nav-link {{ Request::segment(2) == 'config' ? 'active':'' }}">
                                <i class="nav-icon fa fa-gears"></i>
                                <p>
                                    Config
                                </p>
                            </a>
                        </li>
                      <li class="nav-header">LABELS</li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-circle-o text-danger"></i>
                          <p class="text">Important</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-circle-o text-warning"></i>
                          <p>Warning</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-circle-o text-info"></i>
                          <p>Informational</p>
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

        <div class="content-wrapper">

            @yield('content')

        </div>  
        
        <footer class="main-footer">
            <strong>Copyright &copy; 2018-2018 <a href="">ASHRAF KAMARUDIN</a>.</strong> All rights reserved. Prototype 1
        </footer>

        <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
        
    </div>

    <!-- jQuery -->
    <script src="{{ asset('adminLTE-3/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminLTE-3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset('adminLTE-3/plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminLTE-3/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('adminLTE-3/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('adminLTE-3/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminLTE-3/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{ asset('adminLTE-3/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('adminLTE-3/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('adminLTE-3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('adminLTE-3/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('adminLTE-3/plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminLTE-3/dist/js/adminlte.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('adminLTE-3/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminLTE-3/plugins/datatables/dataTables.bootstrap4.js') }}"></script>


    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminLTE-3/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminLTE-3/dist/js/demo.js') }}"></script>

    <!-- page script -->
    <script>
      $(function () {
        $("#event").DataTable();
      });
    </script>


    <script src="{{ asset('admin/js/custom.js') }}"></script>
        <!-- CK Editor -->
    <script src="{{ asset('AdminLTE-3/plugins/ckeditor/ckeditor.js') }}"></script>

    <script>
        $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        ClassicEditor
          .create(document.querySelector('#editor'), {
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    {
                      model: 'Lead Paragraph',
                      view: {
                          name: 'p',
                          classes: 'lead'
                      },
                      title: 'paragraph (lead)',
                      class: 'lead',

                      // It needs to be converted before the standard 'heading2'.
                      converterPriority: 'high'
                  },
                  {
                      model: 'blockQuote Footer',
                      view: {
                          name: 'footer',
                          classes: 'blockquote-footer'
                      },
                      title: 'blockquote (footer)',
                      class: 'blockquote-footer',

                      // It needs to be converted before the standard 'heading2'.
                      converterPriority: 'high'
                  }
                ]
            }
          })
          .then(function (editor) {
            // The editor instance
          })
          .catch(function (error) {
            console.error(error)
          })

        // bootstrap WYSIHTML5 - text editor

        $('.textarea').wysihtml5({
          toolbar: { fa: true }
        })
      })
    </script>

</body>
</html>
