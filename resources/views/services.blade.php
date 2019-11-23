@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url({{asset('images/bg/page-banner-bg.jpg')}})" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner row align-items-center">
                
                <!-- Page Title -->
                <div class="col-lg-6 col-12">
                    <h1 class="page-title">Service</h1>
                </div>
                
                <!-- Page Breadcrumb -->
                <div class="col-lg-6 col-12">
                    <ul class="page-breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">service</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
	<!-- Page Banner Section End -->
	
	<!-- Service Section Start -->
    <div class="feature-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                
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
				
				<!-- Feature Start-->
                <div class="col-lg-4 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="{{asset('images/service/4.png')}}" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Quality Assurance</a></h4>
							<p>Under this service we carry out several checks to make sure quality is maintained by a financial institution while serving its clients.</p>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
				
				<!-- Feature Start-->
                <div class="col-lg-4 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="{{asset('images/service/5.png')}}" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Bank Reconciliation</a></h4>
							<p>Content here ...</p>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
				
				<!-- Feature Start-->
                <div class="col-lg-4 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="{{asset('images/service/6.png')}}" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Inheritance Tax</a></h4>
							<p>Content here ....</p>
						</div>            
					</div>
                </div>
				<!-- Feature End-->      
                
            </div>
        </div>
    </div>
	<!-- Service Section End -->

@endsection()