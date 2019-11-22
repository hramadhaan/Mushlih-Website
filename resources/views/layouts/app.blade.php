<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mushlih Apps | Aplikasi yang Ngebantu Kamu Untuk Ibadah</title>

    <!-- Scripts -->
    <script src="{{ asset('js/bulma.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar is-white " role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item -brand-text" href="{{ route('home') }}">
                        <h2 class="title is-5"><b>Mushlih.</b></h2>
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">

                    <div class="navbar-end">
                        <div class="navbar-item">
                            @guest
                            <div class="buttons">
                                <a class="button is-link" href="{{ route('login') }}">
                                    <strong>{{ __('Login') }}</strong>
                                </a>
                                @if (Route::has('register'))
                                <a class="button" href="{{ route('register') }}">
                                    <strong>{{ __('Register') }}</strong>
                                </a>
                                @endif
                            </div>
                            @else

                            <div class="navbar-item has-dropdown is-hoverable is-primary">
                                <a class="navbar-link">
                              {{Auth::user()->name}}
                            </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{__('Logout')}}
                              </a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script async type="text/javascript" src="{{asset('js/bulma.js')}}"></script>
</body>

</html>
