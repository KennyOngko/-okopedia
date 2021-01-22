<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('adm.name', 'Admin') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/admin') }}">
                    {{ config('adm.name', 'Admin') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ __('Product') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-success" href="{{ route('admproduct') }}">
                                         {{ __('Add Product') }}
                                    </a>
                                    <a class="dropdown-item text-success" href="{{route('listProduct')}}">
                                        {{ __('List Product') }}
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown bg-sucess">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Category') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-success" href="{{ url('/admin/addCategory') }}">
                                        {{ __('Add Category') }}
                                    </a>
                                    <a class="dropdown-item text-success" href="{{route('viewCategory')}}">
                                        {{ __('List Category') }}
                                    </a>
                                </div>
                            </li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    $okopedia
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-whiter" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-success" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-success" href="{{ route('home') }}">
                                        {{ __('Member') }}
                                    </a>
                                </div>
                            </li>
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