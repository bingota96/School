<!DOCTYPE HTML>
<html>
<header>
	<title>@yield('title', 'Home Page')</title>
 	@include('modules.link');
</header>
<body>
  <div id="page">
    @include("modules.nav");
    @yield('content')
    @include('modules.footer');
    @include("modules.script");
  </div>
</body>
</html>
