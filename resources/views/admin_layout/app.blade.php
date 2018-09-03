<!DOCTYPE html>
<html>

	<title>@yield('title')</title>
		@include('admin_layout.header-nav')

	@yield('content')

	@include("admin_layout.footer")
</html>
