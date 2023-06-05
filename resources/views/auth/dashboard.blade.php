<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                    <a class="navbar-brand" href="">
                        <span class="fs-4">{{ __('Dashboard') }}</span>
                    </a>
                

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('transactions')}}">
                                {{ __('Transactions') }}
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('transactions')}}">
                                {{ __('Transactions') }}
                            </a>
                        </li>   
                        <hr>
                    </ul>
                    <ul class="navbar-nav  ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="dropdown">
                                <a id="navbarDropdown" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                        <strong>{{ Auth::user()->name }}</strong>
                                </a>
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a></li>
                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        @endguest
                    </ul>
                </div>
                
            </div>
            
        </nav>

        {{-- col-lg-3 col-md-4 col-sm-3 --}}

        <main class="py-4">
            {{-- Start Content here --}}

            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @else
                                <div class="alert alert-success">
                                    You are logged in!
                                </div>       
                            @endif                
                        </div>
                    </div>
                </div>    
            </div>
            {{-- End content here --}}
        </main>
    </div>
</body>
</html>