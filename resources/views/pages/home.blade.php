@extends('layout.app')
@section('content')
    <div class="">    
        <!-- start header -->
        @include('shared.header')
       
          <!-- start hero section -->
          <section class="wow animate__fadeIn bg-very-light-gray pt-0 pb-0 d-lg-block d-none">
            <div class="container-fluid position-relative">
                <div class="row align-items-center">
                    
                    <!-- start column -->
                    <div class="col-12 col-lg-6 col-md-5 d-flex flex-column justify-content-center full-screen page-title-large padding-100px-left">
                        <!-- start page title -->
                        <!--<span class="d-block text-black opacity6 text-small alt-font text-uppercase">About Pagviy-solutions</span> -->
                        <div>
                            @include('shared.alert')
                        </div>
                        <h1 class="text-black font-weight-600 alt-font letter-spacing-minus-2 sm-margin-50px-top">Lets help you serve in your dream agency.</h1>
                        <p class="text-black opacity6 text-large alt-font">PAGVIY solutions would give you step by step guidance on the application/interview processes for your desired agency.
                        </p>
                        <div class="btn-dual margin-10px-top">
                            <a href="services.html" class="btn btn-large btn-red mx-lg-0">Get Started</a>
                            <!-- <a href="ideavalidation.html" class="alt-font text-uppercase px-3 font-weight-600 text-link-extra-dark-gray text-deep-pink-hover text-small">Turn idea to reality<i class="fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a> -->
                        </div>
                        <!-- end page title -->
                    </div>
                    <!-- start column -->
                    <div class="col-12 col-lg-6 padding-0px-all margin-0px-tb">
                        <div class="">
                            <img src="images/home/hero.png" alt="" class="hero-img">
                         </div>
                    <!-- end column -->
                </div>
            </div>
        </section>
        <!-- end hero section -->

         <!-- start mobile hero section -->
         <section class="parallax wow animate__fadeIn full-screen p-0 d-lg-none d-block">
            <div class="container position-relative h-100">
                <div class="row h-100 align-items-center">
                    <!-- start column -->
                    <div class="col-12 d-flex flex-column justify-content-center page-title-large h-100 cover-background sm-background-image-center" style="background-image:url('images/home/hero.png');">
                        <div class="opacity-medium bg-white"></div>
                        <!-- start page title -->
                        <div class="position-relative">
                        <h1 class="text-black font-weight-600 alt-font letter-spacing-minus-2 sm-margin-50px-top">Lets help you serve in your dream agency.</h1>
                        <p class="text-black opacity6 text-large alt-font">PAGVIY solutions would give you step by step guidance on the application/interview processes for your desired agency.
                        </p>
                        <a href="services.html" class="btn btn-large btn-red mx-lg-0">Get Started</a>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end mobile hero section -->

        @include('components.about')
        @include('components.who-we-are')
        @include('components.core-values')
        @include('components.mission')
        @include('components.agencies')
        @include('components.client-counter')
         @include('components.testimonial')
    </div>
@endsection