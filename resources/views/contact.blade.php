@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url({{asset('images/bg/page-banner-bg.jpg')}}" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner row align-items-center">

                <!-- Page Title -->
                <div class="col-lg-6 col-12">
                    <h1 class="page-title">contact us</h1>
                </div>

                <!-- Page Breadcrumb -->
                <div class="col-lg-6 col-12">
                    <ul class="page-breadcrumb">
                        <li><a href="{{url('/')}}">home</a></li>
                        <li class="active">contact us</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
	<!-- Page Banner Section End -->

    <!-- Contact Section Start -->
    <div class="contact-section pt-55 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12 ml-auto mr-auto">
                    <div class="row">

						<!-- Section Title Start -->
						<div class="section-title text-center col-12 pb-50 pt-40">
							<h1>Get In Touch</h1>
							<p>Ideal Financial Consultancy Limited is a limited company, registered under Companies Act, 2006 in Engalnd and Wales, Company Number is 09075725.</p>
						</div>
						<!-- Section Title End -->

                        <!-- Contact Info Start -->
                        <div class="contact-info text-center col-md-4 col-12 mb-30">
                            <h4>Address:</h4>
                            <span></span>
                            <p>24 Midland Street <br> Manchester M12 6LB</p>
                        </div>
						<!-- Contact Info Start -->

                        <!-- Contact Info Start -->
                        <div class="contact-info text-center col-md-4 col-12 mb-30">
                            <h4>Phone:</h4>
                            <span></span>
                            <p><a href="tel:0044 161 8188894"> +44 161 8188894</a></p>
                            <!-- <p><a href="tel:">+99 858 574 565 45</a></p> -->
                        </div>
						<!-- Contact Info Start -->

                        <!-- Contact Info Start -->
                        <div class="contact-info text-center col-md-4 col-12 mb-30">
                            <h4>email:</h4>
                            <span></span>
                            <p><a href="mailto:info@Idealconsultant.co.uk"> info@Idealconsultant.co.uk</a></p>
                            <!-- <p><a href="mailto:">companyname@demo.com</a></p> -->
                        </div>
						<!-- Contact Info Start -->

                        <!-- Contact Form Start -->
                        <div class="col-12 mt-20">
                            <div class="contact-form">
                                <form id="contact-form" action="https://demo.hasthemes.com/korki-v5/korki-v5/assets/mail.php" method="post">
                                    <div class="row row-5">
                                        <div class="col-md-6 col-12 mb-20"><input type="text" name="name" placeholder="Name"></div>
                                        <div class="col-md-6 col-12 mb-20"><input type="email" name="email" placeholder="Email"></div>
                                        <div class="col-12 mb-20"><textarea name="message" placeholder="Message"></textarea></div>
                                        <div class="col-12"><input type="submit" value="send message"></div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
						<!-- Contact Form End -->

                    </div>
                </div>

            </div>
        </div>
    </div>
	<!-- Contact Section End -->

    <!-- Contact Map Start -->
    <div id="contact-map"></div>
	<!-- Contact Map End -->

@endsection()

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLbABrXVz5EMDPTQlDJ9NGhFaiE0OxlI8"></script>

<script src="{{asset('map/contact-map.js')}}"></script>
@endpush()
