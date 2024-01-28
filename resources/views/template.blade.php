<html>
 <head>
 <title>My website | @yield('title', 'Home page')</title>
 </head>
 <body>
 <h1>@yield('title')</h1>
 <div class="container">
 @yield('content')
 </div>
 @section('footerScripts')
 <script></script>
 @show
 </body>
</html>
