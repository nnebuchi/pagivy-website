
@extends('layout.app')
@section('content')
        <!-- start header -->
        @include('shared.header')
        <!-- start page title section -->
        <section class="wow animate__fadeIn cover-background background-position-centre" style="background-image:url('images/g10.png');">
            <!--<div class="opacity-medium bg-light-gray"></div> -->
            <div class="container position-relative">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-7 col-md-7 d-flex flex-column justify-content-center page-title-large padding-100px-tb">
                        <!-- start page title -->
                        <span class="d-block text-black opacity6 text-small alt-font text-uppercase">About Pagviy Solutions</span>
                        <h1 class="text-black font-weight-500 alt-font demo-heading">We <strong class="text-deep-pink">Provide </strong> step by step guidance on the application & interview processes for your desired agency</h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-12 col-lg-5 col-md-5 d-flex flex-column page-title-large padding-100px-tb d-lg-block d-none"  style="text-orientation: mixed; writing-mode: vertical-rl;">
                        <!-- start page title -->
                        <div class="row" style="height: 180px; border-left: 1px solid rgb(5, 5, 5)"></div>
                        <span class="d-block text-black opacity6 text-medium margin-100px-top padding-100px-top alt-font" > About Us</span>
                        <!-- end page title -->
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 d-flex flex-column page-title-large padding-100px-tb mt-5">
                            <!-- start sub title -->
                            <span class="d-block text-black opacity6 alt-font text-uppercase margin-5px-bottom text-small">Why we started</span>
                            <h1 class="text-deep-pink font-weight-600 mb-0 alt-font">Our Story</h1>
                            <!-- end sub title -->
                        </div>
                        <div class="col-8 col-lg-6 d-flex flex-column page-title-large padding-100px-tb mt-5">
                            <!-- start sub title -->
                            <span class="d-block text-black text-medium opacity6 alt-font margin-5px-bottom">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta officia vitae reprehenderit quasi asperiores iure eius doloribus inventore incidunt. Autem impedit architecto, ipsum harum quo repudiandae perspiciatis natus tempore adipisci.</span>
                            <!-- end sub title -->
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 align-items-center">
                        <div class="col sm-margin-15px-bottom">
                            <!-- start blockquote -->
                        <blockquote class="border-color-deep-pink">
                            <h6 class="text-deep-pink font-weight-600 mb-3 alt-font">Our Vision</h6>
                            <span class="d-block text-black opacity6 margin-5px-bottom alt-font">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi incidunt corrupti alias saepe nam. Incidunt nulla,</span>
                        </blockquote>
                        <!-- end blockquote -->
                        </div>
                        <div class="col sm-margin-15px-bottom">
                            <!-- start blockquote -->
                            <blockquote class="border-color-deep-pink">
                            <h6 class="text-deep-pink font-weight-600 mb-3 alt-font">Our Mission</h6>
                            <span class="d-block text-black opacity6 margin-5px-bottom alt-font">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi incidunt corrupti alias saepe nam. Incidunt nulla,</span>
                        </blockquote>
                        <!-- end blockquote -->
                        </div>
                        <div class="col">
                            <!-- start blockquote -->
                        <blockquote class="border-color-deep-pink">
                            <h6 class="text-deep-pink font-weight-600 mb-3 alt-font">Why Choose Us</h6>
                            <span class="d-block text-black opacity6 margin-5px-bottom alt-font">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi incidunt corrupti alias saepe nam. Incidunt nulla,</span>
                        </blockquote>
                        <!-- end blockquote -->
                        </div>                    
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        @include('components.who-we-are')
        @include('components.core-values')
        @include('components.about')
        @include('components.client-counter')
@endsection