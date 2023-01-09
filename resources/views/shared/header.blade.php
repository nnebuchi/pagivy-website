<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top header-dark background-transparent dark-link navbar-expand-lg">
        <div class="container-lg nav-header-container">
            <!-- start logo -->
            <div class="col-auto col-lg-2 ps-0">
                <a href="{{ route('home') }}" title="Pagviy-solutions" class="logo my-auto">
                    <img src="{{ asset('images/logo/pag_logo-01.png') }}" class="logo-dark default" alt="Pagviy-solutions">
                    <img src="{{ asset('images/logo/pag_white-01.png') }}" alt="Pagviy-solutions" class="logo-light">
                </a>
            </div>
            <!-- end logo -->
            <div class="col accordion-menu px-0">
                <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">
                        <!-- start menu item -->
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        
                        <li class="dropdown">
                            <a href="{{route('about')}}">About Us</a>
                        </li>

                        
                        <li>
                            <a href="services">Services</a>
                        </li>
                        {{-- <li class="dropdown">
                            <a href="#">Gallery</a>
                        </li> --}}
                        <!-- <li class="dropdown">
                            <a href="cowork.html">Co-work</a>
                        </li> -->
                       
                        <!-- end menu item -->
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 pe-0 text-end d-none d-md-block">
                <a href="{{route('contact-page')}}" class="btn btn-medium btn-red">Contact Us</a>
            </div>
            
        </div>
    </nav>
    
    <!-- end navigation --> 
</header>