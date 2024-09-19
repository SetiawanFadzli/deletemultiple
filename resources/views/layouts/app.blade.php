<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
	 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	 <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
	 <link rel="stylesheet" href="{{ asset('icon/themify-icons/themify-icons.css') }}">
	 <link rel="stylesheet" href="{{ asset('icon/themify-icons/themify-icons.css') }}">
	 <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <!-- Add your CSS files here -->
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <!-- Add your JS files here -->
	<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('js/modernizr/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr/css-scrollbars.js') }}"></script>
<!-- classie js -->
<script type="text/javascript" src="{{ asset('js/classie/classie.js') }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/pcoded.min.js') }}"></script>
<script src="{{ asset('js/demo-12.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
</body>
</html>