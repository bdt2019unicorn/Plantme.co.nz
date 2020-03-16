<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        @include('layouts.app.1_head')
        @yield('page_head')
    </head>
	<body id="home" style="font-family: 'Baloo Da', Arial, sans-serif;">
	    <div id="home" class="card full-width full-page">
    		@include('layouts.app.2_header')
    		<div class="card-body content">
    		    @yield('content')
    		</div>
    		@include('layouts.app.3_footer')
		</div>
		@yield('page_popup')
		@include('layouts.app.4_script')
		@yield('page_script')
	</body>
</html>