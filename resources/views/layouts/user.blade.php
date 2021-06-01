<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User - Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/fontawesome/css/all.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/styles.css') }}">
    @yield('css')

    <!-- Custom styles for this template -->
    <link href="{{ asset('user/css/Schchat-dashboard.css') }}" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="border-right " id="sidebar-wrapper">
            <div class="d-flex justify-content-center pt-5">
                <div class="circular--portrait">
                    <img src="{{ asset('user/images/team-9.jpg') }}" alt="">
                </div>
            </div>
            <div class="text-center port py-2">
                Welcome {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
            </div>
            <div class="Schchat-list-group list-group list-group-flush">
                <a href="{{route('dashboard')}}" class="myActive schchat-active list-group-item list-group-item-action bg-light"><i
                        class="bi bi-house pr-2 h5"></i>Dashboard</a>
                <a class="myActive list-group-item list-group-item-action text-decoration-none stretched-link"
                    href="#submenu0" data-toggle="collapse" data-target="#submenu0"><i
                        class="fas fa-home pr-2 h5"></i>Properties</a>
                <div class="collapse submenu" id="submenu0" aria-expanded="false">

                    <a class="list-group-item list-group-collapse list-group-flush text-decoration-none stretched-link"
                        href="{{ route('addPro') }}">Add New Properties</a>
                    <a class="list-group-item list-group-collapse list-group-flush text-decoration-none stretched-link"
                        href="{{ route('my_pro') }}"></i>Added Properties</a>
                </div>

                <a class="myActive list-group-item list-group-item-action text-decoration-none stretched-link" href="#"
                    data-toggle="collapse" data-target="#submenu1"><i class="fas fa-users pr-2 h6"></i>My Intrest</a>
                <div class="collapse submenu" id="submenu1" aria-expanded="false">
                    <a class="list-group-item list-group-collapse list-group-flush text-decoration-none stretched-link"
                        href="{{ route('my-interests') }}"></i>Wish List</a>
                    <a class="list-group-item list-group-collapse list-group-flush text-decoration-none stretched-link"
                        href="{{ route('purchased') }}"></i>Purchased properties</a>
                </div>


                <a href="#" class="list-group-item list-group-item-action bg-light" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                        class="bi bi-box-arrow-left pr-2 h5"></i>Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
            @include('user.partials.nav')

            @yield('content')
        </div>
    </div>

    <footer>
        <div class="container-fluid bg-white py-2 text-right text-dark">

            <span class="">Zamella.com &copy; 2021</span>

        </div>
    </footer>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    </script>

    <!-- Search Icon javascript -->
    <script>
        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }

    </script>

    <!-- Search Icon Javascript end -->



</body>

</html>
