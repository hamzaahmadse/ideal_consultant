@extends('layout.app')

@section('title', 'Home')

@section('content')

    <!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url({{asset('images/bg/page-banner-bg.jpg')}})" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner row align-items-center">

                <!-- Page Title -->
                <div class="col-lg-6 col-12">
                    <h1 class="page-title">{{$service->name}}</h1>
                </div>

                <!-- Page Breadcrumb -->
                <div class="col-lg-6 col-12">
                    <ul class="page-breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">service detail</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Campaign Section Start -->
    <div class="campaign-section pt-100 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Campaign Start -->
                    <div class="single-campaign">
                        <!-- Image -->
                        <div class="image"><img src="{{asset($service->image)}}" alt="Campaign"></div>
                        <!-- Content -->
                        <div class="content">
                            <h3>{{$service->name}}</h3>
                            <div style="text-align: justify;">{!! $service->description !!}</div>
                        </div>
                    </div>
                    <!-- Campaign End -->
                </div>

                <!-- Campaign Sidebar Wrap Start -->
                <div class="campaign-sidebar-wrap col-lg-4 col-12 mb-50">

                    <!-- Sidebar -->
{{--                    <div class="campaign-sidebar">--}}
{{--                        <h4 class="campaign-sidebar-title">Follow us</h4>--}}
{{--                        <div class="campaign-social-follow">--}}
{{--                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>--}}
{{--                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- Sidebar -->
                    <div class="campaign-sidebar">
                        <h4 class="campaign-sidebar-title">other services</h4>
                        <ul class="campaign-sidebar-links">
                            @foreach($other_services as $other)
                                <li><a href="{{route('service-detail', $other->id)}}">{{$other->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Sidebar -->
{{--                    <div class="campaign-sidebar">--}}
{{--                        <h4 class="campaign-sidebar-title">upcoming campaign</h4>--}}
{{--                        <div class="sidebar-campaign">--}}
{{--                            <a href="service-details.html" class="image"><img src="assets/images/news/sidebar-1.jpg" alt="News"></a>--}}
{{--                            <div class="content">--}}
{{--                                <h4><a href="service-details.html">Best Marketing  Agency.</a></h4>--}}
{{--                                <span class="location"><i class="icon-map-pin"></i>West Midlands, UK</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="sidebar-campaign">--}}
{{--                            <a href="service-details.html" class="image"><img src="assets/images/news/sidebar-2.jpg" alt="News"></a>--}}
{{--                            <div class="content">--}}
{{--                                <h4><a href="service-details.html">Economy Strengthens.</a></h4>--}}
{{--                                <span class="location"><i class="icon-map-pin"></i>West Midlands, UK</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="sidebar-campaign">--}}
{{--                            <a href="service-details.html" class="image"><img src="assets/images/news/sidebar-3.jpg" alt="News"></a>--}}
{{--                            <div class="content">--}}
{{--                                <h4><a href="service-details.html">Brand Management.</a></h4>--}}
{{--                                <span class="location"><i class="icon-map-pin"></i>West Midlands, UK</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- Sidebar -->
{{--                    <div class="campaign-sidebar">--}}
{{--                        <div class="campaign-sidebar-newsletter">--}}
{{--                            <h4>Subscribe Newsletter</h4>--}}
{{--                            <p>There are many vari ofpassag Lorem Ipsum availab.</p>--}}
{{--                            <!-- Newsletter Form -->--}}
{{--                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-form" name="mc-embedded-subscribe-form" class="campaign-sidebar-newsletter-form validate" target="_blank" novalidate="">--}}
{{--                                <div id="mc_embed_signup_scroll">--}}
{{--                                    <label for="mce-EMAIL"></label>--}}
{{--                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email...." required="">--}}
{{--                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->--}}
{{--                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>--}}
{{--                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-red">subscribe</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- Sidebar Wrap End -->
            </div>
        </div>
    </div>
    <!-- Campaign Section End -->

@endsection()
