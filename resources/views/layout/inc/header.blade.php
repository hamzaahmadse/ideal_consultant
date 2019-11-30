<!-- Header Section Start -->
    <div class="header-section">
        
        <!-- <div class="header-top side-padding">
            <div class="container">
                <div class="row">
					<div class="col">
                        
                        <div class="header-links">
                            <a href="#"><i class="fa fa-phone"></i>info@Idealconsultant.co.uk</a>
                            <a href="#">/</a>
                            <a href="#"><i class="fa fa-envelope"></i> 0161 349 2349</a>
                        </div>
                    </div>
                    <div class="col">
                        
                        <div class="header-social">
                            <a href="#">Mon - Fri : 9am to 5pm </a>
                            <a href="#"> / </a>
                            <a href="https://www.facebook.com/IDEAL-Financial-Consultancy-246126778916765/?ref=hl"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
       
        <!-- Header Bottom Start -->
        <div class="header-bottom header-sticky side-padding">
            <div class="container">
                <div class="row"> 
                    <!-- Logo Start -->
                    <div class="col">
                        <a href="{{route('home')}}" class="logo"><img src="{{asset('images/ideal_consultant_logo_s.png')}}" alt="Logo"></a>
                    </div><!-- Logo End -->
                    <!-- Main Menu Start -->
                    <div class="col d-none d-lg-block">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{url('/')}}">home</a>
									</li>
                                    <!-- <li><a href="about-us.html">about</a></li> -->
                                    <li class="{{ Route::is('services') ? 'active' : '' }}">
                                        <a href="{{url('/services')}}">service</a>
                                    </li>
                                    <li class="{{ Route::is('career') ? 'active' : '' }}">
                                        <a href="{{url('career')}}">career</a>
                                    </li>
                                    <!-- <li class="menu-item-has-children"><a href="blog.html">blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="{{ Route::is('contact') ? 'active' : '' }}">
                                        <a href="{{url('contact')}}">contact</a>
                                    </li>
                                    <li class="{{ Route::is('contact') ? 'active' : '' }}">
                                        <a href="{{url('contact')}}">GDPR</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- Main Menu End -->
                    <!-- Header Button Start -->
                    <!-- <div class="col">
                        <div class="header-button">
                            <a href="index.html#donation" class="btn btn-red">APOINTMENT</a>
                        </div>
                    </div> -->
					<!-- Header Button End -->
                    <!-- Mobile Menu Start -->
                    <div class="mobile-menu d-block d-lg-none col"></div><!-- Mobile Menu End -->
                </div>
            </div>
        </div><!-- Header Bottom End -->
    </div><!-- Header Section End