<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
  @yield('title', 'DC Comics')    
  </title>

  @vite('resources/js/app.js')
  @vite('resources/scss/main.scss')

  <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">

  @yield('asset')

</head>
<body>
  @include('layouts.partials.header')
  @yield('hero')
  @yield('maincontent')
  @include('layouts.partials.footer')

  @yield('modals')
  @yield('script')
</body>
</html>