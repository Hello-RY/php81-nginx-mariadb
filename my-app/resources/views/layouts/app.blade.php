<!DOCTYPE html>
<html lang="en">
<head>
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body>
  

  <header>
    <h1 class="text-yellow-200">Instagrum app from layout</h1>
  </header>

  <div class="content">
    @yield('content')
  </div>

  <footer>
    C 2024 instagrum app from layhout
  </footer>

</body>
</html>