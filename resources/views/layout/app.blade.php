<!DOCTYPE html>
<html>

	<title>@yield('title')</title>
 @include("layout.header_nav")
	@yield('content')
	@include("layout.footer")
</html>
