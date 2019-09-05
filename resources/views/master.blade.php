<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Chiro Maldegem</title>

  <link href="{{URL::asset('css/bootstrap-datetimepicker.css')}}" rel="stylesheet">

  <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/modern-business.css')}}" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Chiro Maldegem</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/leaders')}}">Leiding</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{url('/groups')}}" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Afdelingen
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="{{url('/groups/1')}}">Ribbels</a>
              <a class="dropdown-item" href="{{url('/groups/2')}}">Speelclub</a>
              <a class="dropdown-item" href="{{url('/groups/3')}}">Rakwi</a>
              <a class="dropdown-item" href="{{url('/groups/4')}}">Tito</a>
              <a class="dropdown-item" href="{{url('/groups/5')}}">Keasp</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/news')}}">Nieuws</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{url('/subscribe')}}">Inschrijving Werkjaar</a>
          </li>
          @if( !empty(Auth::user()->leader) )
            <li class="nav-item">
              <a class="nav-link" href="{{url('/kidslist')}}">Ledenlijst</a>
            </li>
          @endif
          @endauth
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

      </div>
    </div>
  </nav>
<!--content-->

@yield('content')
  <!-- Footer -->
  <footer class="py-5 bg-dark" style="margin-top:60px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Chiro Maldegem 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::asset('js/app.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap-datetimepicker.js')}}"></script>
  <script src="{{URL::asset('js/extra.js')}}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>

</html>
