<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lariox</title>

    <!--LINK-->
    <script src="{{asset('user/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/fontawesome/css/all.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
</head>

<body>
    <!--NAVBAR-->
    <section>
        <header class="header">
            <nav class="navbar navbar_1 navbar-expand-lg navbar-light">
                <div>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span class="navbar-brand mb-0 ml-5 h1">ZAMELLA</span>
                    </a>
                </div>
                <!-- <a class="nav-link nav-login btn mb-2 mb-md-0 d-block d-md-none" href="#" style="width: 70px!important;">Login</a> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto pr-5">
                        <li class="nav-item active mr-5">
                            <a class="nav-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
                        </li>
                         <li class="nav-item mr-4">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link " href="#">Agent</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link " href="{{ route('properties') }}">Properties</a>
                        </li>

                         @guest
                         <li class="nav-item mr-4 d-none d-md-block">
                            <a class="nav-link nav-login btn mb-2 mb-md-0" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item mr-4 d-none d-md-block">
                            <a class="nav-link nav-login btn mb-2 mb-md-0" href="{{ route('register') }}">Register</a>
                        </li>

                    @else

                        <li class="nav-item"><a href="{{ route('my-interests') }}" class="nav-link"><i
                                    class="fa fa-heart fa-2x"></i><span style="position: absolute;"
                                    class="badge badge-danger wishlist-count">{{ count(myWishlist()) }}</span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> {{ Auth::user()->firstname }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->isAdmin == 1)
                                    <a class="dropdown-item" href="{{ route('admin') }}">Dashboard</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('my-interests') }}">My Interests</a>

                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{-- <a class="dropdown-item text-danger" href="#">Logout</a> --}}
                            </div>
                        </li>
                    @endguest
                        {{-- <div class="input-group desktop-search-area">
                            <input type="text" class="form-control" name="search" placeholder="search Property">
                            <div class="input-group-append">
                                <button class="input-group-text pr-4"><i class="fa fa-search text-buchi"></i></button>
                            </div>
                        </div> --}}
                    </ul>
                </div>
            </nav>
        </header>
    </section>

    @yield('content')
    <!--Footer-->
   

</body>

</html>
