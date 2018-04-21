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
	
	<script src="{{ asset('js/bootstrap.password.js')}}"></script>
	<!--<script src="{{ asset('js/scripts.js')}}"></script>-->
	


    <!-- Styles -->
  <!-- CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/styles.css')}}">
	

    @yield('extra_css')
    <!-- Custom Theme Style -->
  
</head>
<body class="nav-md">
<div id="app" class="container body">
    <div class="main_container">

    
          

         @yield('content')


    <!-- footer content -->
        <footer>
           
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
