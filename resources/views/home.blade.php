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
                           <div class="button"><a href="{{route('services')}}" class="btn btn-lg btn-red">About More</a></div>
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
						   <div class="sub-title"><h3>Get your Business Advance</h3></div>
                           <div class="title"><h1>When it is time to Digitalized</h1></div>
{{--                           <div class="title-2"><h1>When it is time to pay taxs</h1></div>--}}
                           <div class="button"><a href="{{route('services')}}" class="btn btn-lg btn-red">About More</a></div>
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
				<div class="col-md-12 col-lg-7 col-sm-12">
					<div class="mission-area-content pt-35">
						<h2>Welcome to Ideal Financial Consultancy</h2>
						<p>
                            We help small and medium size businesses in streamlining their financial reporting and projections so they can present their case effectively to their prospects, clients or investors. We do so with accurate record keeping, automating standard procedures and performing routine quality assurance tests. We can also guide businesses how and where to get their internal audit done to secure industry standard quality awards like ISO, Six Sigma etc.
                        </p>
                        <p>
                            Apart from financial services, we provide support and guidance to improve the health of the business by doing:
                        </p>
						<ul class="cr-liststyle-1">
							<li>Complete analysis of the corporate goals and current practices of your business operations.</li>
							<li>Observation of solutions offered by competition in the landscape and comparison of strength vs weaknesses</li>
							<li>Preparation of a step-by-step system to improve the offering of your business with better positioning, features, pricing, go-to-market strategy, sales, delivery, support or a combination of some of these factors.
                            </li>
							<li>Applying different techniques like SEO, Content Writing, Digital Marketing, Social Media management etc. and measuring ROI against different KPIs of business and identifying what works and what doesn't.
                            </li>
							<li>Achieving growth by increasing their outreach, and consequently sales, or reducing costs in current practices. Either way, adding value to the businesses of our valued clients.
                            </li>
						</ul>
{{--						<a href="#" class="cr-btn">--}}
{{--							<span>Know more</span>--}}
{{--						</a>--}}
					</div>
				</div>
				<div class="col-md-12 col-lg-5 col-sm-12">
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
                    <h1>Our Services</h1>
                    <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p> -->
                </div><!-- Section Title End -->

                <!-- Feature Start-->
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="feature text-center mb-30">
                            <!-- Icon -->
                            <div class="image">
                                <img src="{{asset($service->image)}}" alt="" />
                            </div>
                            <!-- Content -->
                            <div class="content">
                                <h4><a href="{{route('service-detail', $service->id)}}">{{$service->name}}</a></h4>
                                <p>{{$service->excerpt}}</p>
                                <a href="{{route('service-detail', $service->id)}}" class="btn btn-sm btn-red">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p> -->
                </div>
				<!-- Section Title End -->
                <div class="col-12">
                    <!-- Donation Form Start -->
                    <form action="{{route('request_callback')}}" method="post">
                        <div class="donation-form row">
                            @csrf
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <input type="text" name="name" placeholder="Name *" value="{{old('name')}}">
                                <div>{{$errors->first('name')}}</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <input type="email" name="email" placeholder="E-Mail *" value="{{old('email')}}">
                                <div>{{$errors->first('email')}}</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <input type="text" name="phone" placeholder="Phone *" value="{{old('phone')}}">
                                <div>{{$errors->first('phone')}}</div>
                            </div>
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
