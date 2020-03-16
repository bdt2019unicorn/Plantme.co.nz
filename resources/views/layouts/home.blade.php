<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        @include('layouts.home.1_head')
        @yield('page_head')
    </head>
	<body id="home" style="font-family: 'Baloo Da', Arial, sans-serif;">
		@include('layouts.home.2_menu')
		@yield('content')
		@include('layouts.home.3_footer')
		@yield('page_script')
	</body>
</html>