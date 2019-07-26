<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/materialize/dist/css/materialize.min.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <nav>
      <div class="nav-wrapper">
        <div class="container">
          <a href="#!" class="brand-logo">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Home</a></li>
            <li><a href="badges.html">Professor</a></li>
            <li><a href="collapsible.html">Trabalhos</a></li>
            <li><a href="mobile.html">Atas</a></li>
            <li><a href="mobile.html">Informes</a></li>
            <li><a href="mobile.html">Projetos</a></li>

            <ul id="cursos" class="dropdown-content">
              <li><a href="#!">NDE</a></li>
              <li><a href="#!">Colegiado</a></li>

            </ul>

            <li><a class="dropdown-trigger" href="#" data-target="cursos">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>


          </ul>
        </div>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="sass.html">Home</a></li>
      <li><a href="badges.html">Professor</a></li>
      <li><a href="collapsible.html">Trabalhos</a></li>
      <li><a href="mobile.html">Atas</a></li>
      <li><a href="mobile.html">Informes</a></li>
      <li><a href="mobile.html">Projetos</a></li>
    </ul>


    <main class="py-4">
      @yield('content')
    </main>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
</body>

</html>