<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css?cache=a002')}}"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/css/main.css"/>
  </head>
  <body class="blue-grey lighten-4">

  <nav>
    <div class="nav-wrapper blue darken-3">
      <a href="#" class="brand-logo left"> Energia Solar</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('calculator.create') }}">Novo Orçamento</a></li>
        <li><a href="{{ route('dashboard.index') }}">Admin</a></li>
      </ul>
    </div>
  </nav>
  @yield('content')

  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  </body>
</html>
