<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? ' Admin' }}</title>
        <!-- Styles -->
            <link rel="shortcut icon" href="{{ asset('images/logo.jpeg') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('assets/main.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-custom shadow-sm py-3">
                <div class="container">
                    @if(!empty(auth()->user()->user_id))
                    <h5 class="navbar-brand" href="#"><img
                                                        width="50"
                                                        style="height: 50px; object-fit: cover;border-radius: 10px;"
                                                        src="{{ asset('images/logo.jpeg') }}"
                                                        alt=""
                                                    /><b> Sekawan Coffee & Roastery</b></h5>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon text-dark pt-2"><i class="fas fa-bars"></i></span>
                    </button>
                    @else 
                    <a class="navbar-brand" href="{{ url('/') }}"><b>{{ config('app.name') }}</b></a>
                    @endif
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            @if(!empty(auth()->user()->user_id))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/admin">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('admin.produk') }}">Data Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('admin.kategori') }}">Data Kategori</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('admin.profil') }}">
                                            Profil Akun
                                        </a>
                                        <div class="divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="clearfix mt-5"></div>
            <main>
                @yield('content')
            </main>
            <div class="clearfix mt-5 pt-4"></div>
            <section
                    style="
                    background-image: url('images/logo.jpeg');
                    background-repeat: no-repeat;
                    background-size: cover;
                    height: 60vh;
                    "
                >
                    <div
                    class="hero-content  d-flex justify-content-center align-items-center flex-column"
                    >
                        <h1 class="text-center text-white display-4">Sekawan Coffee & Roastery</h1>
                        <h6 class="text-center text-white">Coffee House dengan konsep rumahan yang menghadirkan 
                            kehangatan kekerabatan antar sesama.</h6>
                        <hr  size="5" width="800" class=" text-center text-white " />
                        <style type="text/css">
                            h1 {
                                font-size: 40px;
                                font-family: Cambria,"Times New Roman",serif; }
                            h6 {
                                font-size: 18px;
                                font-family: Cambria,"Times New Roman",serif; }
                        </style>
                    </div>
            </section>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>
        @yield('javascript')
    </body>
    </html>
@include('layouts.footer')
