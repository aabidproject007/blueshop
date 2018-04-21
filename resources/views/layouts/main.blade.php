<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Invoice Manager</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--  <title>{{ config('app.name', 'Laravel') }}</title>-->
  <!-- JS -->
	<script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ asset('js/moment.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/jquery.dataTables.js')}}"></script>
	<script src="{{ asset('js/dataTables.bootstrap.js')}}"></script>
	<script src="{{ asset('js/bootstrap.datetime.js')}}"></script>
	<script src="{{ asset('js/bootstrap.password.js')}}"></script>
	<script src="{{ asset('js/scripts.js')}}"></script>
	


    <!-- Styles -->
  <!-- CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.datetimepicker.css')}}">
	<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css')}}">
	<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('css/styles.css')}}">
	

    @yield('extra_css')
    <!-- Custom Theme Style -->
  
</head>
<body class="nav-md">
<div id="app" class="container body">
    <div class="main_container">

    
            @include('layouts.elements.top_nav')

         @yield('content')


    <!-- footer content -->
        <footer>
            <div class="pull-right">
                Webbeta - Bootstrap Admin Template by <a href="https://webbetasolutions.com">WEB BETA</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

    </div>
</div>

<!-- Scripts -->


@include('layouts.elements.notification')

@yield('extra_script')
</body>
</html>
