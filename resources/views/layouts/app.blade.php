<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titre')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!--Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--materialize.css-->

    <link href="{{ asset('/css/materialize.min.css') }}"rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}"rel="stylesheet">
    <link href="{{ asset('/css/starability-growRotate.min.css') }}"rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('/css/styl.css') }}" rel="stylesheet"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script> -->

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>




<body id="app-layout">


    <nav class="barre-nav navbar-default navbar-static-top">

        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <a class="div-logo" href="{{ url('/') }}">

                    <img src="{{url('/img/logo-movie.png')}}" alt="Logo">
                </a>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li class="recherche col s12 m3 l3">

                        {!! Form::open(array('route' => 'queries.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
                        {!! Form::text('search', null,
                                           array('required',
                                                'class'=>'form-control')) !!}
                        {!! Form::submit('Chercher',
                                                array('class'=>'btn btn-default')) !!}
                    {!! Form::close() !!}
                    </li>

                    <li><a href="film/create"></a></li>
                    @if (Auth::guest())

                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Ouvrir un compte</a></li>
                        <li class="dropdown">
                    @else

                        <li><a href="film/create">Ajouter un film</a></li>
                        <li><a href="film/modification">Modifier mon compte</a></li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <!-- yield('content') ------------------------------->


    <section class='main container'>
      @yield('content')

        @include ('partials.flash')


        @include ('partials.flash')
        @yield('content')

    </section>

    <!--------------------------------------------------->

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
