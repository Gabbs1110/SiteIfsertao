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
    @include('layouts._admin._nav')

    <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <main>
      @if(Session::has('mensagem'))
      <div class="container">
        <div class="row">
          <div class="card  {{ Session::get('mensagem')['class'] }}">
            <div align="center" class="card-content">
              {{ Session::get('mensagem')['msg'] }}
            </div>
          </div>
        </div>
      </div>
      @endif
      @yield('content')
    </main>
    <div>
      
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
</body>

</html>