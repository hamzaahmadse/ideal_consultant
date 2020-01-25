@extends('layout.app')

@section('title', 'Home')

@section('content')

    <!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url({{asset('images/bg/page-banner-bg.jpg')}}" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner row align-items-center">

                <!-- Page Title -->
                <div class="col-lg-6 col-12">
                    <h1 class="page-title">General Data Protection Regulation</h1>
                </div>

                <!-- Page Breadcrumb -->
                <div class="col-lg-6 col-12">
                    <ul class="page-breadcrumb">
                        <li><a href="{{url('/')}}">home</a></li>
                        <li class="active">GDPR</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Contact Section Start -->
    <div class="candidate-section pt-100 pb-65">
        <div class="container">
            <div class="row">

                <!-- Candidate Content Start -->
                <div class="candidate-content col-12 mb-30">

                    <h1>GDPR</h1>
                    <div style="text-align: justify;">
                        <strong><p>What does GDPR stand for?</p></strong>
                        <p>
                            GDPR stands for General Data Protection Regulation. It's the core of Europe's digital privacy legislation.
                        </p>
                        <strong>
                            <p>
                                How did it come about?
                            </p>
                        </strong>
                        <p>
                            In January 2012, the European Commission set out plans for data protection reform across the European Union in order to make Europe 'fit for the digital age'. Almost four years later, agreement was reached on what that involved and how it will be enforced.
                            One of the key components of the reforms is the introduction of the General Data Protection Regulation (GDPR). This new EU framework applies to organisations in all member-states and has implications for businesses and individuals across Europe, and beyond.
                            "The digital future of Europe can only be built on trust. With solid common standards for data protection, people can be sure they are in control of their personal information," said Andrus Ansip, vice-president for the Digital Single Market, speaking when the reforms were agreed in December 2015.
                        </p>

                        <strong>
                            <p>
                                What is GDPR?
                            </p>
                        </strong>
                        <p>
                            At its core, GDPR is a new set of rules designed to give EU citizens more control over their personal data. It aims to simplify the regulatory environment for business so both citizens and businesses in the European Union can fully benefit from the digital economy.
                            The reforms are designed to reflect the world we're living in now, and brings laws and obligations - including those around personal data, privacy and consent - across Europe up to speed for the internet-connected age.
                            Fundamentally, almost every aspect of our lives revolves around data. From social media companies, to banks, retailers, and governments - almost every service we use involves the collection and analysis of our personal data. Your name, address, credit card number and more all collected, analysed and, perhaps most importantly, stored by organisations.
                        </p>
                        <strong>
                            <p>
                                What does GDPR mean for consumers/citizens?
                            </p>
                        </strong>
                        <p>
                            Because of the sheer number of data breaches and hacks that occur, the unfortunate reality for many is that some of their data - be it an email address, password, social security number, or confidential health records - has been exposed on the internet.
                            One of the major changes GDPR brings is providing consumers with a right to know when their data has been hacked. Organisations are required to notify the appropriate national bodies as soon as possible in order to ensure EU citizens can take appropriate measures to prevent their data from being abused.
                            Consumers are also promised easier access to their own personal data in terms of how it is processed, with organisations required to detail how they use customer information in a clear and understandable way.
                        </p>
                    </div>
                </div>
                <!-- Candidate Content End -->
            </div>
        </div>
    </div><!-- About Candidate Section End -->
    <!-- Contact Section End -->

@endsection()

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLbABrXVz5EMDPTQlDJ9NGhFaiE0OxlI8"></script>

    <script src="{{asset('map/contact-map.js')}}"></script>
@endpush()
