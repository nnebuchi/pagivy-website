@extends('layout.app')
@section('content')
@include('shared.header')
 <!-- start hero section -->
 <section class="wow animate__fadeIn top-space">
    <div class="container">
        <div class="row align-items-center">
            <!-- start column -->
            <div class="col-12 col-lg-6 md-margin-15px-bottom">
                <div class=" sm-padding-30px-all last-paragraph-no-margin">
                    <h2 class="font-weight-600 letter-spacing-minus-1 margin-20px-bottom demo-heading alt-font text-black w-md-90 w-sm-100">Connect with us Today!

                    </h2>
                    <p class="d-block text-black opacity6 text-medium margin-10px-top alt-font mb-3 w-md-90 w-sm-100">If you want to get hired by that your desired agency, we are here to help. We're ready to answer all your questions and kick off your application process.</p>
                </div>
            </div>
            <!-- end column -->
            <!-- start column -->
            <div class="col-12 col-lg-6 md-margin-15px-bottom ">
                <div class="">
                    <img src="images/contact/phone.png" alt="">
            </div>
            <!-- end column -->
        </div>
    </div>
</section>
<!-- end hero section -->
<!-- start accordions style 03 section -->
<section class="wow animate__fadeIn pt-0">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-8">
                <!-- start accordion -->
                <div class="panel-group accordion-event accordion-style3" id="accordion-3" data-active-icon="fa-angle-up" data-inactive-icon="fa-angle-down">
                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#general-enquiry" class="popup-with-form">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">01</span>
                                    <span class="text-white-2 sm-w-80 d-inline-block">General Enquiry</span>
                                    <i class="fas fa-angle-right text-white"></i>
                                </div>
                            </a>
                            <!-- start form -->
                            <form id="general-enquiry" action='https://forms.zohopublic.com/techbridgecityltd/form/GeneralEnquiry/formperma/eUs3VPPHFc2S_ipGXp5sSAIYL9RIbIWW31Xg0MdTdR4/htmlRecords/submit' method="post" class="white-popup-block mfp-hide col-10 col-xxl-5 col-xxl-5 col-lg-6 col-md-6 col-sm-6 p-0 mx-auto" accept-charset='UTF-8' enctype='multipart/form-data'>
                                <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                                    <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">General Enquiry</div> 
                                    <div>
                                        <div class="form-results d-none"></div>
                                        <input type="text" name="Name_First" id="name" placeholder="First Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                        <input type="text" name="Name_Last" id="name" placeholder="Last Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                        <!-- <input type="text" name="SingleLine" id="name" placeholder="Company Name*" class="border-radius-4 bg-white medium-input required"> -->
                                        <!-- <input type="text" name="SingleLine1" id="name" placeholder="Current Role*" class="border-radius-4 bg-white medium-input required"> -->
                                        <input type="email" name="Email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input required">
                                        <textarea name="MultiLine" id="comment" rows="5" placeholder="Your Message" class="border-radius-4 bg-white medium-input"></textarea>
                                        <p class="text-extra-small">The contact information you provide to us will be used to contact you about our services.</p>
                                        <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black zf-submitColor">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#startup-enquiry" class="popup-with-form">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">02</span>
                                    <span class="text-white-2 sm-w-80 d-inline-block">I am a Startup</span>
                                    <i class="fas fa-angle-right text-white"></i>
                                </div>
                            </a>
                            
                            <form id="startup-enquiry" action='https://forms.zohopublic.com/techbridgecityltd/form/StartupApplication/formperma/06rHDH6fAR7xuaTd9bMXM6ifT7pPkU-Jgt96OzncD7s/htmlRecords/submit' method="post" class="white-popup-block mfp-hide col-10 col-xxl-5 col-xxl-5 col-lg-6 col-md-6 col-sm-6 p-0 mx-auto" accept-charset='UTF-8' enctype='multipart/form-data'>
                                <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                                    <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Startup Application</div> 
                                    <div>
                                        <div class="form-results d-none"></div>
                                        <input type="text" name="Name_First" id="name" placeholder="First Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                        <input type="text" name="Name_Last" id="name" placeholder="Last Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                        <input type="text" name="SingleLine" id="name" placeholder="Company Name*" class="border-radius-4 bg-white medium-input required">
                                        <input type="text" name="Website" id="name" placeholder="Company Website*" class="border-radius-4 bg-white medium-input required">
                                        <input type="text" name="SingleLine1" id="name" placeholder="Current Role*" class="border-radius-4 bg-white medium-input required">
                                        <input type="email" name="Email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input required">
                                        <input type="text" compname="PhoneNumber_countrycodeval" name="PhoneNumber_countrycodeval" phoneFormat="1" maxlength="10"  id="international_PhoneNumber_countrycodeval" placeholder="Phone&#x20;Number"/>
                                        <input type="text" compname="PhoneNumber" name="PhoneNumber_countrycode" phoneFormat="1" isCountryCodeEnabled=true maxlength="20" value="" fieldType=11 id="international_PhoneNumber_countrycode" placeholder="Phone&#x20;Number" />
                                        <textarea name="MultiLine" id="comment" rows="5" placeholder="Other Comment" class="border-radius-4 bg-white medium-input"></textarea>
                                        <p class="text-extra-small">The contact information you provide to us will be used to contact you about our products and services. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our Privacy Policy.</p>
                                        <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black zf-submitColor">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#booksession" class="popup-with-form">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">03</span>
                                    <span class="text-white-2 sm-w-80 d-inline-block">Corporation or Business</span>
                                    <i class="fas fa-angle-right text-white"></i>
                                </div>
                            </a>
                           
                            <form id="booksession" action='https://forms.zohopublic.com/techbridgecityltd/form/IdeaValidation/formperma/jnSTyQAXOeLWHPuwbRsRRD4KLnGbb6HMVks1RKzT1yw/htmlRecords/submit' method="post" class="white-popup-block mfp-hide col-10 col-xxl-5 col-xxl-5 col-lg-6 col-md-6 col-sm-6 p-0 mx-auto" accept-charset='UTF-8' enctype='multipart/form-data'>
                                <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                                    <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Book Discover Session</div> 
                                    <div>
                                        <div class="form-results d-none"></div>
                                        <input type="text" name="Name_First" id="name" placeholder="First Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                        <input type="text" name="Name_Last" id="name" placeholder="Last Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                        <input type="text" compname="PhoneNumber" name="PhoneNumber_countrycode" phoneFormat="1" isCountryCodeEnabled=false maxlength="20" value="" fieldType=11 id="international_PhoneNumber_countrycode" placeholder="Phone&#x20;Number" />
                                        <input type="email" name="Email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input required">
                                        <textarea name="MultiLine" id="comment" rows="5" placeholder="What is the current state of your idea?" class="border-radius-4 bg-white medium-input"></textarea>
                                        <p class="text-extra-small">The contact information you provide to us will be used to contact you about our products and services. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our Privacy Policy.</p>
                                        <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <!-- end tab content -->
                </div>
                <!-- end accordion -->
            </div>
        </div>
    </div>
</section>
<!-- end accordions style 03 section -->
<!-- start section -->
<div class="container">
    <div class="row row-cols-2 row-cols-lg-3 row-cols-sm-2 justify-content-center padding-50px-tb">
        <!-- feature box item-->
        <div class="col md-margin-30px-bottom xs-margin-15px-bottom last-paragraph-no-margin wow animate__fadeInUp">
            <div class="feature-box">
                <div class="content">
                    <i class="icon-map icon-medium text-deep-pink"></i>
                    <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom">Location</div>
                    <p class="mx-auto md-w-100 alt-font"> 48 Marine Road, Sho-Silva, GRA Apapa Lagos,Nigeria</p>
                </div>        
            </div>
        </div>
        <!-- end feature box item-->
        <!-- feature box item-->
        <div class="col md-margin-30px-bottom xs-margin-15px-bottom last-paragraph-no-margin wow animate__fadeInUp" data-wow-delay="0.2s">
            <div class="feature-box">
                <div class="content">
                    <i class="icon-mobile icon-medium text-deep-pink"></i>
                    <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom">Call Us</div>
                    <p class="mx-auto md-w-100 alt-font">+234 0000000000</p>
                </div>
            </div>
        </div>
        <!-- end feature box item-->
        <!-- feature box item-->
        <div class="col last-paragraph-no-margin wow animate__fadeInUp" data-wow-delay="0.4s">
            <div class="feature-box">
                <div class="content">
                    <i class="icon-envelope icon-medium text-deep-pink"></i>
                    <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom">Email Us</div>
                    <p class="w-85 mx-auto md-w-100 alt-font">hello@</p>
                </div>   
            </div>
        </div>
        <!-- end feature box item-->
    </div>
</div>
<!-- end section -->
<!-- start social section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center social-style-1 social-icon-style-4">
                <ul class="large-icon mb-0">
                    <li><a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                    <li><a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                    <li><a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                    <li><a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                </ul>
            </div>                   
        </div>
    </div>
</section>
<!-- end social section -->
@endsection