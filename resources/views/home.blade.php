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
                    <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p> -->
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
                            <h4><a href="service-details.html">Business Start-up Advice</a></h4>
                            <p>We help people starting new business or forming a new company. We assist them in business planning; prepare projected financial statements, and contingent planning. We have good experience of banking industry & can help new entrepreneurs in opening business bank account and getting credit/finance facility from the bank.</p>
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
                            <h4><a href="service-details.html">Digital Marketing</a></h4>
                            <p>As part of business support services, Ideal Financial also provides digital marketing services to its clients by making better online presence, and marketing through mobile and online resources. We provide following services under this segment:</p>
                            <ul>
                                <li>Social media marketing</li>
                                <li>E-mail & mobile marketing</li>
                                <li>Content writing</li>
                            </ul>
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
                            <h4><a href="service-details.html">Accountancy and Book Keeping</a></h4>
                            <p>Under this service we maintain books of accounts of our clients which are mostly small businesses. We process payroll for employees as well. Key tasks we perform are:
                            </p>
                            <ul>
                                <li>Monthly Sales Invoicing posting</li>
                                <li>Monthly Purchase and Expense Posting</li>
                                <li>Calculation of payroll</li>
                                <li>Generation of pay slips</li>
                            </ul>
                        </div>            
                    </div>
                </div>
				<!-- Feature End-->
                
            </div>
        </div>
    </div>
	<!-- Service Section End -->
	
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
					<!-- <h4>Emergency Call Only: <span>+0003456789</span></h4>                    -->
                </div><!-- Mission Content End -->                
            </div>
        </div>
    </div>
	<!-- Mission Section End -->

@endsection()