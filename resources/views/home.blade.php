@extends('layout.app')

@section('title', 'Home')

@section('content')

	<!-- Hero Section Start -->
    <div class="hero-section">
        <!-- Hero Slider Start -->
        <div class="hero-slider">
			
			<!-- Hero Item Start -->
            <div class="hero-item bg-theme">
                <div class="container">
                    <div class="row align-items-end">                     
                        <!-- Hero Content -->
                        <div class="hero-content col-sm-12 col-md-12 col-lg-6">
						   <div class="sub-title"><h3>Don’t Worry,</h3></div>
                           <div class="title"><h1>Our Expert Adviser</h1></div>
                           <div class="title-2"><h1>Always With You</h1></div>
                           <div class="button"><a href="#" class="btn btn-lg btn-red">About More</a></div>
                        </div>                        
                        <!-- Hero Image -->
                        <div class="hero-image col-sm-4 col-md-4 col-lg-6">
                           <img src="{{asset('images/hero/1.png')}}" alt="Hero Image">
                        </div>                
                    </div>
                </div>
            </div><!-- Hero Item End -->
			
            <!-- Hero Item Start -->
            <div class="hero-item bg-theme">
                <div class="container">
                    <div class="row align-items-end">
                        <!-- Hero Content -->
                        <div class="hero-content col-sm-12 col-md-12 col-lg-6">
						   <div class="sub-title"><h3>We Are Ready,</h3></div>
                           <div class="title"><h1>Get your tax Pay</h1></div>
                           <div class="title-2"><h1>When it is time to pay taxs</h1></div>
                           <div class="button"><a href="#" class="btn btn-lg btn-red">About More</a></div>
                        </div>
                        <!-- Hero Image -->
                        <div class="hero-image col-sm-4 col-md-4 col-lg-6">
                           <img src="{{asset('images/hero/1.png')}}" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div><!-- Hero Item End -->
			
        </div><!-- Hero Slider End -->
    </div><!-- Hero Section End -->
	
	<!-- Mission Area -->
	<div class="mission-area bg-gray pt-60">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6 col-sm-12">
					<div class="mission-area-content pt-35">
						<h2>Welcome to Ideal Financial Consultancy</h2>
						<p>The mission of Ideal Financial Consultancy is to provide financial and business support services to small businesses and financial institutes through accurate record keeping, better presentation and by applying various quality checks.</p>
						<ul class="cr-liststyle-1">
							<li>Aim to continually exceed your expectations, Make the time to really listen to your needs.</li>
							<li>Suggest ideas to improve your profits and help you grow the business.</li>
							<li>To achieves the highest standards IDEAL Financial Consultancy Limited invest in training</li>
							<li>I.T, Constantly exploring new information, tools and techniques with which we can further add value to your business.</li>
							<li>Continually adapting & stretching our own standards. We help clients to build their brand recognition through effective means of digital marketing.</li>
						</ul>
						<a href="#" class="cr-btn">
							<span>Know more</span>
						</a>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-sm-12">
					<div class="mission-area-thumb">
						<img class="wow fadeInRight" src="{{asset('images/about/about.png')}}" alt="mission area thumb">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Mission Area -->
	
    <!-- Service Section Start -->
    <div class="feature-section pt-55 pb-70">
        <div class="container">
            <div class="row">
                
                <!-- Section Title Start -->
                <div class="section-title text-center col-12 pb-50 pt-40">
                    <h1>Featured Services</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div><!-- Section Title End -->
                
                <!-- Feature Start-->
                <div class="col-lg-4 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="{{asset('images/service/1.png')}}" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">BUSINESS START-UP ADVICE</a></h4>
							<p>There are many variations of passag Lorem Ipsum available, but the majority have sfered alteration in some form.</p>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
				
				<!-- Feature Start-->
                <div class="col-lg-4 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="{{asset('images/service/2.png')}}" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">ACCOUNTANCY AND BOOK KEEPING</a></h4>
							<p>There are many variations of passag Lorem Ipsum available, but the majority have sfered alteration in some form.</p>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
				
				<!-- Feature Start-->
                <div class="col-lg-4 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="{{asset('images/service/3.png')}}" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">DIGITAL MARKETING</a></h4>
							<p>There are many variations of passag Lorem Ipsum available, but the majority have sfered alteration in some form.</p>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
                
            </div>
        </div>
    </div>
	<!-- Service Section End -->
	
	<!-- Video Area -->
	<div class="video-area bg-fixed" style="background-image: url(assets/images/bg/1.png)" data-overlay="theme-color" data-opacity="8">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
					<div class="video-area-inner text-center">
						<a class="video-popup-trigger" href="https://vimeo.com/104509732">
							<img src="{{asset('images/icons/icon-play.png')}}" alt="Play">
						</a>
						<h1>Success Depends on a Right Plan</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Video Area -->

	<!-- Counter Area -->
	<div class="counter-area half-translate">
		<div class="counter-area-inner bg-gray">
			<div class="container">
				<div class="row no-gutters align-items-center">
					<div class="col-lg-4 col-md-4">
						<div class="counter text-center">
							<h1 class="counter-active">131</h1>
							<h6>AWARD WIN</h6>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="counter text-center">
							<h1 class="counter-active">612</h1>
							<h6>Projects Done</h6>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="counter text-center">
							<h1 class="counter-active">465</h1>
							<h6>Satisfied Client</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Counter Area -->
	
	<!-- Service Section Start -->
    <div class="team-section pb-55">
        <div class="container">
            <div class="row">                
                <!-- Section Title Start -->
                <div class="section-title text-center col-12 pb-50 pt-40">
                    <h1>Expert Advisor</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
				<!-- Section Title End --> 
            </div>
			<div class="row team-wrap justify-content-center">
				<!-- Single Team -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="single-team">
						<div class="team-thumb">
							<a href="#"><img src="{{asset('images/team/1.png')}}" alt="team image"></a>
						</div>
						<div class="team-content text-center">
							<div class="team-conetnt-info">
								<h5><a href="#">Margan Spee</a></h5>
								<h6>Founder Owner</h6>
							</div>
							<div class="team-social-icons">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--// Single Team -->
				<!-- Single Team -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="single-team">
						<div class="team-thumb">
							<a href="#"><img src="{{asset('images/team/2.png')}}" alt="team image"></a>
						</div>
						<div class="team-content text-center">
							<div class="team-conetnt-info">
								<h5><a href="#">Loe Karnerl</a></h5>
								<h6>Chairmen Head</h6>
							</div>
							<div class="team-social-icons">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--// Single Team -->
				<!-- Single Team -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="single-team">
						<div class="team-thumb">
							<a href="#"><img src="{{asset('images/team/3.png')}}" alt="team image"></a>
						</div>
						<div class="team-content text-center">
							<div class="team-conetnt-info">
								<h5><a href="#">Qumar Stain</a></h5>
								<h6>Marketer</h6>
							</div>
							<div class="team-social-icons">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--// Single Team -->
			</div>
        </div>
    </div>
	<!-- Service Section End -->
	
	<!-- Tax Calculator Area Start -->
	<div class="content-section-area pt-80 pb-90" style="background-image: url({{asset('images/bg/rate.png')}})" data-overlay="theme-color" data-opacity="8">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-6">
					<div class="calculate-left mt-3">
						<h2>Tax Calculator Own Terms</h2>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
						<div class="calculate-wrappwr">
							<div class="section-one">
								<select class="option-area" name="cars">
									<option value="area">Select Your Area</option>
									<option value="retail">Retail</option>
									<option value="all">All</option>
								</select>
							</div>
							<div class="section-one">
								<select class="option-area" name="cars">
									<option value="country">Select Your Division</option>
									<option value="usa">Agra</option>
									<option value="all">Dolain</option>
									<option value="all">Island</option>
								</select>
							</div>
							<div class="section-one">
								<select class="option-area" name="cars">
									<option value="number">Number</option>
									<option value="usa">1-5</option>
									<option value="all">1-6</option>
									<option value="all">1-7</option>
								</select>
							</div>
							<div class="section-one">
								<input placeholder="Yearly Income" type="text">
							</div>
							<div class="section-one">
								<input placeholder="Total Payment" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-lg-6">
					<div class="calculate-right">
						<img src="{{asset('images/about/calcu.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Tax Calculator Area Start -->
	
	<!-- Campaign Section Start -->
    <div class="campaign-section pt-55 pb-70">
        <div class="container">
            <div class="row">               
                <!-- Section Title Start -->
                <div class="section-title text-center col-12 pb-50 pt-40">
                    <h1>Our Cases</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
				<!-- Section Title End -->                              
            </div>
			<div class="row">
                
                <div class="col-12">
                    <div class="isotop-filter">
                        <button data-filter="*" class="active">all</button>
                        <button data-filter=".consultant">Consultant</button>
                        <button data-filter=".tax">Tax</button>
                        <button data-filter=".finance">Finance</button>
                        <button data-filter=".business">Business</button>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="isotop-grid row">

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item consultant col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="{{asset('images/gallery/3-1.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('images/gallery/1-1.jpg')}}" class="gallery-popup"><img src="{{asset('images/icons/pro.png')}}" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item tax col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="{{asset('images/gallery/3-2.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('images/gallery/1-5.jpg')}}" class="gallery-popup"><img src="{{asset('images/icons/pro.png')}}" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item finance col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="{{asset('images/gallery/3-3.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('images/gallery/1-6.jpg')}}" class="gallery-popup"><img src="{{asset('images/icons/pro.png')}}" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item business tax col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="{{asset('images/gallery/3-4.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('images/gallery/1-2.jpg')}}" class="gallery-popup"><img src="{{asset('images/icons/pro.png')}}" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item consultant col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="{{asset('images/gallery/3-5.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('images/gallery/1-3.jpg')}}" class="gallery-popup"><img src="{{asset('images/icons/pro.png')}}" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item tax business col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="{{asset('images/gallery/3-6.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('images/gallery/1-4.jpg')}}" class="gallery-popup"><img src="{{asset('images/icons/pro.png')}}" alt="" /></a>
                            </div>
                        </div>


                    </div>
                </div>
                
            </div>
        </div>
    </div>
	<!-- Campaign Section End -->	
	
	<!-- Request Call Back Section Start -->
    <div id="donation" class="donation-section pt-95 pb-70" style="background-image: url({{asset('images/bg/2.jpg')}})" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="row">                
                <!-- Section Title Start -->
                <div class="section-title title-white text-center col-12 mb-60">
                    <h1>Request a Call Back</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
				<!-- Section Title End -->                
                <div class="col-12">                    
                    <!-- Donation Form Start -->
                    <form action="#">
                        <div class="donation-form row">
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><input type="text" placeholder="Name *"></div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><input type="email" placeholder="E-Mail *"></div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><input type="text" placeholder="Phone *"></div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><button class="btn btn-red btn-hover-dark-red">Submit Now</button></div>
                        </div>
                    </form><!-- Donation Form End -->                    
                </div>                
            </div>
        </div>
    </div>
	<!-- Donation Section End -->
	
	<!-- Mission Section Start -->
    <div class="mission-section bg-gray pt-100 pb-95">
        <div class="container">
            <div class="row align-items-center">               
                <!-- Mission Content Start -->
                <div class="col-lg-6 col-12 order-lg-2">                    
                    <div class="mission-map" id="world-vmap"></div>                    
                </div><!-- Mission Content End -->                
                <!-- Mission Content Start -->
                <div class="mission-content col-lg-6 col-12">                    
                    <h5>OUR MISSION & VISION</h5>
                    <h2>We aim to provide real value for money.</h2>
                    <p>Our initial introductory meeting can be held in a location that is most convenient to you. During this meeting we will assess the accountancy services required, discuss and answer your questions.</p>
					<p>If you prefer to spread the cost of your accountancy fees we offer a monthly payment plan which can help with the cash flow of your business.</p>
					<h4>Emergency Call Only: <span>+0003456789</span></h4>                   
                </div><!-- Mission Content End -->                
            </div>
        </div>
    </div>
	<!-- Mission Section End -->

	<!-- News Section Start -->
    <div class="news-section pt-60 p-70">
		<div class="row">                
                <!-- Section Title Start -->
                <div class="section-title text-center col-12 pb-50 pt-40">
                    <h1>Advice News</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
				<!-- Section Title End -->  
				
                <!-- News Start -->
                <div class="news col-lg-4 col-md-6 col-12 mb-30">                        
                    <!-- Image -->
                    <a href="blog-details.html" class="image"><img src="{{asset('images/news/1.jpg')}}" alt="News"></a>
                    <!-- Content -->
                    <div class="content">
                        <h3><a href="blog-details.html">Scriptural Texts in Politics Combined Handful.</a></h3>
                        <!-- Meta -->
                        <div class="meta">
                            <a href="#" class="meta-item"><i class="fa fa-user-o"></i>Albert Flores</a>
                            <span class="meta-item"><i class="fa fa-calendar"></i>12.03.2018</span>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum do available, but the majority have suffered alteration in some form the level of high work solid them.</p>
                        <a href="blog-details.html" class="btn btn-sm btn-red">read more</a>
                    </div>                   
                </div>
				<!-- News End -->
                
                <!-- News Start -->
                <div class="news col-lg-4 col-md-6 col-12 mb-30">                        
                    <!-- Image -->
                    <a href="blog-details.html" class="image"><img src="{{asset('images/news/1.jpg')" alt="News">
                    </a>
                    <!-- Content -->
                    <div class="content">
                        <h3><a href="blog-details.html">Colours and in a range of standard Sizes.</a></h3>
                        <!-- Meta -->
                        <div class="meta">
                            <a href="#" class="meta-item"><i class="fa fa-user-o"></i>Albert Flores</a>
                            <span class="meta-item"><i class="fa fa-calendar"></i>12.03.2018</span>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum do available, but the majority have suffered alteration in some form the level of high work solid them.</p>
                        <a href="blog-details.html" class="btn btn-sm btn-red">read more</a>
                    </div>                    
                </div>
				<!-- News End -->
                
                <!-- News Start -->
                <div class="news col-lg-4 col-md-6 col-12 mb-30">                        
                    <!-- Image -->
                    <a href="blog-details.html" class="image"><img src="{{asset('images/news/1.jpg')" alt="News"></a>
                    <!-- Content -->
                    <div class="content">
                        <h3><a href="blog-details.html">Which of us ever undertakes laborious Physical.</a></h3>
                        <!-- Meta -->
                        <div class="meta">
                            <a href="#" class="meta-item"><i class="fa fa-user-o"></i>Albert Flores</a>
                            <span class="meta-item"><i class="fa fa-calendar"></i>12.03.2018</span>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum do available, but the majority have suffered alteration in some form the level of high work solid them.</p>
                        <a href="blog-details.html" class="btn btn-sm btn-red">read more</a>
                    </div>                    
                </div>
				<!-- News End -->                
            </div>
        </div>
    </div>
	<!-- News Section End -->

@endsection()