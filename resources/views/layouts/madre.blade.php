<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <!-- Scripts -->
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

<!-- Styles -->
  @livewireStyles
  
  {{-- contenido variable --}}
  @stack('css')

</head>

<nav>
@include('partials.navegation')

</nav>

<body>
  <header>


    @session('alert')
    <div>
      {{ $value }}
    </div>
    @endsession

  </header>


@yield('content')

  <footer></footer>
</body>

</html>