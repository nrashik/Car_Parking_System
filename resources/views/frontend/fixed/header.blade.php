    <!-- Top Bar Start -->
<div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <h1>Parking<span>Koi?</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>24/7</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+88 01537507100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>info@parkingKoi.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Top Bar end -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a class="nav-item nav-link active"href="{{route('homepage')}}">Home</a>
                            <a href="{{route('contactUs')}}" class="nav-item nav-link">Contact Us</a>
                            <a href=""class="nav-item nav-link">Find Parking</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Parking Areas</a>
                                <div class="dropdown-menu">
                                    @foreach($area as $ar)
                                    <a href="{{Route('area.location',$ar->id)}}" class="dropdown-item">{{$ar->area_name}}</a>
                                   @endforeach
                                </div>
                            </div>
                            <a href="{{route('all.location')}}" class="nav-item nav-link">Parking Locations </a>
                        </div>

                        <!-- <div class="nav-item dropdown">
                            <a class="btn btn-custom" href="{{route('customer.login')}}">Login</a>
                            <a class="btn btn-custom" href="{{route('customer.logout')}}">Logout</a>
                            <a class="btn btn-custom" href="{{route('profile')}}">profile</a>
                        </div> -->

                        @if (auth('customer')->user())
             
             <li class="dropdown">
               <a class="btn btn-success" href="{{route('profile')}}">User Profile</a>
               <!-- <ul class="dropdown-menu"> -->
                 <li><a class="btn btn-danger" type="button" href="{{route('customer.logout')}}">
                   <i class="fas fa-key"></i> Logout
                 </a></li>                  
                               
               <!-- </ul>     -->
             </li>
             @else
               
             
             <li>
               <a type="button" class="btn btn-success" href="{{ route('customer.login') }}"><span>Login</span> 
                 <i class="fas fa-user"></i>
               </a>
             </li>
               
             @endif




                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->