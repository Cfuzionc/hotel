<header>
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line navbar-light">
        <div class="container round-nav">
            <a class="navbar-brand" href="index-cafe.html"><img src="{{ asset('images/logo.png') }}" alt="image"></a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link wow fadeInUp scroll" href="#banner">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInDown scroll" href="#services-sec">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInUp scroll" href="#portfolio">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInDown scroll" href="#our-testimonial">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInUp scroll" href="#our-team">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInDown scroll" href="#reserve-sec">Book Now</a>
                </li>
                @role('Admin')
                    <li class="nav-item">
                        <a class="nav-link wow fadeInDown scroll" href="{{ route('admin.index') }}">Admin</a>
                    </li>
                @endrole
                </ul>
             </div>
        </div>
        <!--Side Menu Button-->
        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </nav>
    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#banner">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#services-sec">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#portfolio">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#our-testimonial">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#our-team">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#reserve-sec">Book Now</a>
                    </li>
                    @role('Admin')
                        <li class="nav-item">
                            <a class="nav-link wow fadeInDown scroll" href="{{ route('admin.index') }}">Admin</a>
                        </li>
                    @endrole

                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="">&copy; 2021 MegaOne. Made With Love by <span class="d-inline d-lg-block"> ThemesIndustry</span></p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

</header>
