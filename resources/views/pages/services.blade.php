
@extends('layout.app')
@section('content')
        <!-- start header -->
        @include('shared.header')

        <section class="parallax wow animate__fadeIn sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url('images/services\ banner-01.jpg');">
            <div class="container one-second-screen sm-margin-100px-top">
                <div class="row h-60 align-items-center"> 
                    <div class="col-12 col-xl-7 col-lg-8 col-sm-10 mx-auto text-center">
                        <span class="text-extra-small alt-font letter-spacing-2 text-uppercase margin-10px-bottom d-inline-block text-medium-gray">Agencies we help you through</span>
                        <h2 class="font-weight-600 alt-font margin-10px-bottom md-margin-20px-bottom text-extra-dark-gray letter-spacing-minus-1">Our Services </h2>
                        <!-- <p class="d-block text-black opacity6 text-medium margin-10px-top alt-font mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur possimus rerum quas. </p> -->
                        <!-- <div class="social-icon-style-8">
                            <ul class="small-icon">
                                <li><a class="twitter text-extra-dark-gray margin-5px-lr" href="https://twitter.com/graysp_ce" target="_blank"><i class="fab fa-twitter"></i></a></li> 
                                <li><a class="facebook text-extra-dark-gray margin-5px-lr" href="https://www.facebook.com/techbridgecity" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="google text-extra-dark-gray margin-5px-lr" href="https://linkedin.com/company/techbridgecity" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a class="dribbble text-extra-dark-gray margin-5px-lr" href="https://instagram.com/techbridgecity" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div> 
                <!-- <div class="down-section text-center">
                    <a href="#about" class="inner-link"><i class="ti-arrow-down icon-small text-deep-pink"></i></a>
                </div> -->
            </div>
        </section>
        @include('components.agencies-card')
@endsection