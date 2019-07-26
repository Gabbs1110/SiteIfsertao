<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Styles -->
   <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('lib/materialize/dist/css/materialize.min.css') }}" rel="stylesheet">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="https://kit.fontawesome.com/93763e4652.js"></script>
  <!-- Fonts -->

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 
</head>

<body>
  <div id="app">
    <header>
      @include('layouts._site._navbar')
    </header>


    <main>
      @yield('content')
    </main>

    @include('layouts._site._rodape')
    




  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
</body>

</html>