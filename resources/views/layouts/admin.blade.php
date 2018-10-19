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

      @include('admin.partials.head')

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

      @include('admin.partials.navbar')

      @include('admin.partials.sidebar')

        <main class="content-wrapper">
          @yield('content')
        </main>  
        
        <footer class="main-footer">
          <strong>Copyright &copy; 2018-2018 <a href="">ASHRAF KAMARUDIN</a>.</strong> All rights reserved. Prototype 1
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
</body>
</html>

@include('admin.partials.js')

@yield('script')
