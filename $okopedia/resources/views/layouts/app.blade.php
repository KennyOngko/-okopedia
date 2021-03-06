<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '$okopedia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
    ul li a.cart .cart-basket {
    font-size: .6rem;
    position: absolute;
    top: -11px;
    right: 12px;
    width: 15px;
    height: 15px;
    color: black;
    background-color: white;
    border-radius: 20%;
    font-weight: bold;
    }
    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" style="color: green">
                    {{ config('app.name', '$okopedia') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <form class="form-inline" action="{{ route('search') }}" method="get"style ="padding-left: 20px">
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 600px">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

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
                            <li class="nav-item px-3 text-uppercase mb-0 position-relative d-lg-flex">
                            <div id="cart" class="d-none">
                            </div>
                            <div style="position: absolute; left: -150px; padding-right: 15px">
                            <button type="button" class="btn btn-success" onclick="location.href ='{{route('cart')}}'"><div style="margin-right: 15px; float: left">Cart</div>
                            <a class="cart position-relative d-inline-flex" style="left: 18px">
                                <i class="fas fa fa-shopping-cart fa-lg"></i>
                                <span class="cart-basket d-flex align-items-center justify-content-center">
                                   @php 
                                   $Total = App\Cart::where('user_id', Auth::user()->id)->count();
                                   @endphp
                                   {{$Total}}
                                </span>
                                </a>
                                </button>

                            <button type="button" class="btn btn-success" onclick="location.href='{{route('history')}}'">History</button>
                            </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <div class="dropdown-divider"></div>
                                    @if(Auth::user()->role_id == '2')
                                    <a class="dropdown-item" href="{{ url('/admin') }}"> {{ __('Admin') }}</a>
                                    @endif
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>