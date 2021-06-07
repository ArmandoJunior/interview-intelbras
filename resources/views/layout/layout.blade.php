<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css?cache=a002')}}"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/css/main.css"/>
  </head>
  <body class="blue-grey lighten-4">
  <ul id="dropdown1" class="dropdown-content">
    <li class="divider">Geradores</li>
    <li><a href="{{ route('product.index') }}">Listar Geradores</a></li>
    <li><a href="{{ route('product.create') }}">Cadastrar Gerador</a></li>
    <li class="divider"></li>
    <li><a href="{{ route('state.index') }}">Listar Estados</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper teal darken-2">
      <a href="#!" class="brand-logo"> Administrativo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('calculator.create') }}">Site</a></li>
        <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
        <li><a href="{{ route('dashboard.budgets') }}">Orçamentos</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Configurações<i class="material-icons right">arrow_drop_down</i></a></li>
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
