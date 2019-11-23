<!DOCTYPE html>
<html>
<head>
	<title>Ideal Consultants | @section('title', 'Home')</title>
	@include('layout.inc.head')
	@stack('style')
</head>
<body>
	<div class="main-wrapper">
		@include('layout.inc.header')
		@yield('content')
		@include('layout.inc.footer')
	</div>
	@include('layout.inc.footer_script')
	@stack('scripts')
</body>
</html>