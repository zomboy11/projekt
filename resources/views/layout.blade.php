<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Wypożyczalnia sprzętu budowlanego</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>



<body>

<div class="container">

    <div class="placeholder">
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="col-md-6 col-12">
                        <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
                        <div class="tm-site-text-box">
                            <h1 class="tm-site-title">Wypożyczalnia</h1>
                            <h6 class="tm-site-description">Sprzętu budowlanego</h6>
                        </div>
                    </div>
                    <nav class="col-md-6 col-12 tm-nav">
                        <ul class="tm-nav-ul">
                            <li class="tm-nav-li"><a href="{{ route('index')}}" class="{{ Request::is('/') ? 'tm-nav-link active' : 'tm-nav-link' }}" accesskey="1" title="">Home</a></li>
                            <li class="tm-nav-li"><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'tm-nav-link active' : 'tm-nav-link' }}" accesskey="2" title="">About</a></li>
                            <li class="tm-nav-li"><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'tm-nav-link active' : 'tm-nav-link' }}" accesskey="3" title="">Contact</a></li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="tm-nav-li">
                                        <a href="{{ route('login') }}" class="{{ Request::is('login') ? 'tm-nav-link active' : 'tm-nav-link' }}" >{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="tm-nav-li">
                                        <a href="{{ route('register') }}" class="{{ Request::is('register') ? 'tm-nav-link active' : 'tm-nav-link' }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
{{--                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                        {{ Auth::user()->name }}--}}
{{--                                    </a>--}}
                                        <a class="tm-nav-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <main>
        <header class="row tm-welcome-section">

        </header>
        @yield('content')
    </main>

    <footer class="tm-footer text-center">
        <p>Copyright &copy; 2021 </p>

    </footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
