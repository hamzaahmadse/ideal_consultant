@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url({{asset('images/bg/page-banner-bg.jpg')}})" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner row align-items-center">

                <!-- Page Title -->
                <div class="col-lg-6 col-12">
                    <h1 class="page-title">Our Services</h1>
                </div>

                <!-- Page Breadcrumb -->
                <div class="col-lg-6 col-12">
                    <ul class="page-breadcrumb">
                        <li><a href="{{url('/')}}">home</a></li>
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
				<!-- Feature End-->
            </div>
        </div>
    </div>
	<!-- Service Section End -->

@endsection()
