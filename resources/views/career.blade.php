@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url({{asset('images/bg/page-banner-bg.jpg')}})" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner row align-items-center">
                
                <!-- Page Title -->
                <div class="col-lg-6 col-12">
                    <h1 class="page-title">Career</h1>
                </div>
                
                <!-- Page Breadcrumb -->
                <div class="col-lg-6 col-12">
                    <ul class="page-breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">career</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
	<!-- Page Banner Section End -->

	<!-- About Candidate Section Start -->
    <div class="candidate-section pt-100 pb-65">
        <div class="container">
            <div class="row">
                
                <!-- Candidate Content Start -->
                <div class="candidate-content col-lg-6 col-12 mb-30">               
                   
                    <h1>Career With Us</h1>
                    <div style="text-align: justify;">
                    	<p>IDEAL Financial Consultancy Limited is always open to welcome young talented, ambitious, and self-driven graduates with “yes can do” attitude.</p>
					<p>If you are a graduate or ACCA part & fully qualified or other professional certification holder and want to be a part of growing company,Please sent us your CV and a personal statement.</p>
                    </div>                    
                </div>
				<!-- Candidate Content End -->
                
                <!-- Candidate Content Start -->
                <div class="candidate-video col-lg-6 col-12 mb-30">    
                	<form action="{{route('send-mail')}}" method="GET" enctype="multipart/form-data">
						 <input type="file" name="file">
						 <input type="submit" name="" value="send">
						 <br>
						 <br>
						 <br>
						 <br>
						 Send in format .pdf, .doc, .jpg, .png.
                	</form>               
                </div><!-- Candidate Content End -->
                
            </div>
        </div>
    </div><!-- About Candidate Section End -->


@endsection()