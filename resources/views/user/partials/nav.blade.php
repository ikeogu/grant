 <!--Nav bar-->
 <nav class="navbar navbar-expand-lg navbar-light bg-white">
     <div class="container">
         <div class="navbar-brand">
             <a class="" id="menu-toggle"><i class="bi bi-list mydashboard-bars h3 pr-2"></i></a>
             <img src="{{ asset('user/images/logo/schchat-logo.png') }}" class="pb-2" width="90" alt="">
         </div>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                 <li class="nav-item active mr-5">
                     <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                 </li>
                 {{-- <li class="nav-item mr-4">
                     <a class="nav-link" href="#">About</a>
                 </li>
                 <li class="nav-item mr-4">
                     <a class="nav-link " href="#">Agent</a>
                 </li>
                 <li class="nav-item mr-4">
                     <a class="nav-link" href="#">Services</a>
                 </li>
                 <li class="nav-item mr-4">
                     <a class="nav-link " href="#">Properties</a>
                 </li> --}}
             </ul>
         </div>

         <!-- Search Button -->
         <div class="row">
             <form>
                 <div class="input-group cx-prepand my-0 mx-4">
                     <input type="text" class="form-control" name="text" placeholder="Search Property" required="">
                     <div class="input-group-append cx-prepen-1 ">
                         <button type="submit"><i class="fa fa-search my-2  mx-3"></i></button>
                     </div>
                 </div>
             </form>
         </div>
         <!-- /End search button-->

         <div class="btn-group">
             <a href="#" class="myToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <div class="avatar shadow-sm">
                     <img src="{{ asset('user/avatar/avatar.png') }}" width="50" alt="">
                 </div>
             </a>
             <div class="dropdown-menu shadow">
                 <div class="col-sm-12 py-3 bg-success d-flex justify-content-center">
                     <div class="circular--avatar">
                         <img src="{{ asset('user/images/Schchat-image.png') }}" alt="">
                     </div>
                     <span class="UserName">D{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                 </div>
                 <a class="menu-link dropdown-item" href="#"><i class="bi bi-person-circle pr-2 h6"></i>My Account</a>
                 <a class="menu-link dropdown-item" href="{{ route('my_pro') }}"><i class="fas fa-home pr-2 h6"></i>My
                     Properties</a>
                 <a class="menu-link dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                         class="bi bi-box-arrow-left pr-2 h6"></i>Sign Out</a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
             </div>
         </div>
         <a class="navbar-toggler outline-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <i class="bi bi-caret-down-fill text-success"></i>
         </a>
     </div>
 </nav>
 <!--Nav bar ends here-->
