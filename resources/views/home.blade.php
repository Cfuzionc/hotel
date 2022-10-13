
@extends('layouts.app')

@section('page-title', 'Start inner page')

@section('content')
<section class="services-sec" id="services-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="heading-area">
                    <h4 class="heading wow slideInLeft">Best Quality  <span> Food in Our Cafe</span></h4>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="image-holder wow slideInRight">
                    <img src="{{ asset('images/services-image.jpg') }}" alt="service-img">
                </div>
            </div>

<!-- Start Reserve -->
<section id="reserve-sec" class=" bg-light py-0">
    <div class="container">
        <div class="row padding-top padding-bottom-half">
            <div class="col-md-12 col-sm-12">
                <div class="reserve-area">
                <span class="portfolio-sub-title mb-3">Quisque tellus risus, adipisci </span>
                <h2 class=portfolio-heading>Reserve Your Seats</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Reserve -->
<!-- Contact US -->
<section id="stayconnect" class="bg-light position-relative py-0">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Name" required id="userName" name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userEmail" class="d-none"></label>
                                    <input class="form-control" type="Email" placeholder="Email"  id="userEmail" name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="contact" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Contact" required id="contact" name="contact">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="btn btn-large-1 btn-rounded btn-orange w-100" id="submit_btn">Reserve Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br><br><br><br><br><br>
            <div class="col-12 padding-top-half">
                <ul class="services-boxes">
                    <!-- Service-1 -->
                    <li class="service-card left wow slideInLeft">
                        <div class="icon-holder"><i class="lni lni-bulb"></i></div>
                        <p class="text">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                    </li>
                    <!-- Service-2 -->
                    <li class="service-card right d-block text-center wow slideInRight">
                        <div class="icon-holder"><i class="lni lni-briefcase"></i></div>
                        <p class="text">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                    </li>
                    <!-- Service-3 -->
                    <li class="service-card left icon-right text-center text-lg-right wow slideInLeft">
                        <p class="text order-2 order-lg-1">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                        <div class="icon-holder order-1 order-lg-2"><i class="lni lni-heart"></i></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->
@endsection
