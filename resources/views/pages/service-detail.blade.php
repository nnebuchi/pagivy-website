@extends('layout.app')
@section('content')
        <!-- start header -->
        @include('shared.header')
         <!-- start service tab section -->
        <section class="wow animate__fadeIn pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-12">
                        <!-- <h4 class="font-weight-600 text-extra-dark-gray alt-font">What we do</h4> -->
                    </div>
                </div>
            </div>
            <div class="container tab-style2 border-radius-8 bg-light-gray">
                <div class="row">
                    <div class="col-12 pb-5 pt-5 border-radius-8 bg-very-light-gray">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs alt-font align-items-center">
                            <li class="nav-item col wow animate__fadeInUp last-paragraph-no-margin"><a class="nav-link active" href="#tab_sec1" data-bs-toggle="tab">
                                <div class="feature-box-6 position-relative pt-3 pb-3">
                                    <i class="icon-genius icon-large" alt="innovation-icon"></i>
                                    <p class="alt-font font-weight-600 text-medium offset-xl-1 px-5 padding-10px-tb">PHASE 1</p>
                                    <div class="feature-box-overlay bg-deep-pink"></div>
                                </div>
                            </a></li>
                            <li class="nav-item col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin"><a class="nav-link" href="#tab_sec2" data-bs-toggle="tab">
                                <div class="feature-box-6 position-relative pt-3 pb-3">
                                    <i class="icon-lightbulb icon-large" alt="innovation-icon"></i>
                                    <p class="alt-font font-weight-600 text-medium offset-xl-1 px-5 padding-10px-tb">PHASE 2</p>
                                    <div class="feature-box-overlay bg-deep-pink"></div>
                                </div>
                            </a></li>
                            <li class="nav-item col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin"><a class="nav-link" href="#tab_sec3" data-bs-toggle="tab">
                                <div class="feature-box-6 position-relative pt-3 pb-3">
                                    <i class="icon-speedometer icon-large" alt="innovation-icon"></i>
                                    <p class="alt-font font-weight-600 text-medium offset-xl-1 px-5 padding-10px-tb">PHASE 3</p>
                                    <div class="feature-box-overlay bg-deep-pink"></div>
                                </div>
                            </a></li>
                            <!-- <li class="nav-item col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin"><a class="nav-link" href="#tab_sec4" data-bs-toggle="tab">
                                <div class="feature-box-6 position-relative pt-3 pb-3">
                                    <i class="icon-tools-2 icon-large" alt="innovation-icon"></i>
                                    <p class="alt-font font-weight-600 text-medium offset-xl-1 px-5 padding-10px-tb">Capacity Building</p>
                                    <div class="feature-box-overlay bg-deep-pink"></div>
                                </div>
                            </a></li> -->
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                </div>                                
                <div class="container-fluid tab-content pb-5 pt-5">
                    <!-- start tab content -->
                    <div class="tab-pane med-text fade in active show" id="tab_sec1">
                        <div class="row align-items-center justify-content-center p-4">
                            <!-- <div class="col-12 col-md-6 sm-margin-30px-bottom padding-30px-left">
                                <img src="images/home/coporateinnovation.png" alt="" class="w-100 border-radius-8"/>
                            </div> -->
                            <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                            <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">Self Mode <strong class="text-deep-pink">(2,000) </strong> </h5>
                                <ul>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                    - Follow instructions
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                    - General instructions of filling <br> the
                                    form.
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Jamb (Information on various
                                department required jamb score)
                                </li>
                                </ul>
                            
                                <!-- <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Documents needed for exam</span>
                                <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Study Plan</span>
                                <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Compendium</span>
                                <span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block alt-font"> - Access to 1 pre-exam mock question</span> -->

                                <!-- <p class="alt-font">We adopt a wide range of methodologies and tools to generate innovative solutions for today's complex organizations.</p> -->
                                <a href="#" class="btn btn-medium btn-red">Register Here</a>
                            </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                            <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">VIP Mode <strong class="text-deep-pink">(7,000) </strong> </h5>

                            <ul>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Follow instructions
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Fill the form  (Physical or  <br> by
                                Zoom)
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Jamb (Information on various
                                department required jamb score)
                                </li>
                            
                            </ul>


                            <!-- <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Documents needed for exam</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Study Plan</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Quizzes</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Assessment</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Compendium</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Access to unlimited pre-exam mock question</span> -->
                            <!-- <p class="alt-font">We adopt a wide range of methodologies and tools to generate innovative solutions for today's complex organizations.</p> -->
                            <a href="#" class="btn btn-medium btn-red">Register Here</a>
                        </div>
                        </div>
                        
                        </div>
                    </div>
                    <!-- end tab content -->


                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec2">
                        <div class="row align-items-center justify-content-center p-4">
                            <!-- <div class="col-12 col-md-6 sm-margin-30px-bottom padding-30px-left">
                                <img src="images/home/coporateinnovation.png" alt="" class="w-100 border-radius-8"/>
                            </div> -->
                            <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                            <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">Self Mode <strong class="text-deep-pink">(13,000) </strong> </h5>
                                <ul>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                    - Documents needed for exam
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                    - Study Plan
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Compendium
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                    - Access to 1 pre-exam mock <br> question
                                </li>
                                </ul>
                            
                                <!-- <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Documents needed for exam</span>
                                <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Study Plan</span>
                                <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Compendium</span>
                                <span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block alt-font"> - Access to 1 pre-exam mock question</span> -->

                                <!-- <p class="alt-font">We adopt a wide range of methodologies and tools to generate innovative solutions for today's complex organizations.</p> -->
                                <a href="#" class="btn btn-medium btn-red">Register Here</a>
                            </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                            <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">VIP Mode <strong class="text-deep-pink">(20,000) </strong> </h5>

                            <ul>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Documents needed for exam
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Study Plan     - Quizzes
                                </li>
                                <!-- <li class="text-large text-extra-dark-gray margin-5px-bottom d-block alt-font">
                                
                                </li> -->
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Assessment     -  Compendium
                                </li>
                                <!-- <li class="text-large text-extra-dark-gray margin-5px-bottom d-block alt-font">
                                
                                </li> -->
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Access to unlimited pre-exam mock question
                                </li>
                            </ul>


                            <!-- <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Documents needed for exam</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Study Plan</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Quizzes</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Assessment</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Compendium</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Access to unlimited pre-exam mock question</span> -->
                            <!-- <p class="alt-font">We adopt a wide range of methodologies and tools to generate innovative solutions for today's complex organizations.</p> -->
                            <a href="#" class="btn btn-medium btn-red">Register Here</a>
                        </div>
                        </div>
                        
                        </div>
                    </div>
                    <!-- end tab content -->
                    

                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec3">
                    <div class="row align-items-center justify-content-center p-4">
                        <!-- <div class="col-12 col-md-6 sm-margin-30px-bottom padding-30px-left">
                            <img src="images/home/coporateinnovation.png" alt="" class="w-100 border-radius-8"/>
                        </div> -->
                        <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                            <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">Self Mode <strong class="text-deep-pink">(5,000) </strong> </h5>
                            <ul>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Advice on medical assessment
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Physical Training Plan
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Documents check list
                                </li>
                                <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - General advice on what to expect <br> and aspects to prepare in.
                                </li>
                            </ul>
                            
                            <!-- <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Documents needed for exam</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Study Plan</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Compendium</span>
                            <span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block alt-font"> - Access to 1 pre-exam mock question</span> -->

                            <!-- <p class="alt-font">We adopt a wide range of methodologies and tools to generate innovative solutions for today's complex organizations.</p> -->
                            <a href="#" class="btn btn-medium btn-red">Register Here</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                            <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">VIP Mode <strong class="text-deep-pink">(20,000) </strong> </h5>

                            <ul>
                            <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Advice on medical assessment
                            </li>
                            <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Physical Training Plan
                            </li>
                            <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Document’s checklist
                            </li>
                            <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                            - Unlimited mock quizzes for current affairs and General
                            knowledge.
                            </li>
                            <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Unlimited mock test on Maths & English
                            </li>
                            <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                - Mock Oral board via zoom
                            </li>
                            </ul>


                            <!-- <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Documents needed for exam</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Study Plan</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Quizzes</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Assessment</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font">  - Compendium</span>
                            <span class="text-extra-large text-extra-dark-gray margin-10px-bottom d-block alt-font"> - Access to unlimited pre-exam mock question</span> -->
                            <!-- <p class="alt-font">We adopt a wide range of methodologies and tools to generate innovative solutions for today's complex organizations.</p> -->
                            <a href="#" class="btn btn-medium btn-red">Register Here</a>
                        </div>
                    </div>
                    
                    </div>
                </div>
                <!-- end tab content -->
                
                    <!-- start tab content -->
                    <!-- <div class="tab-pane fade in" id="tab_sec3">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 sm-margin-30px-bottom padding-30px-left">
                                <img src="images/home/startupcowork.png" alt="" class="w-100 border-radius-8"/>
                            </div>
                            <div class="col-12 col-lg-5 col-md-6 px-5">
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">Startup Incubation</h5>
                                <span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block alt-font">An elite ecosystem of enterprenuers. Our goal is to help startups grow and succeed.                                    </span>
                                <p class="alt-font">We help founders scale up by providing them access to mentorship, office space, business development, funding and legal training.</p>
                                <a href="startups.html" class="btn btn-medium   btn-red">Get Access</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- end tab content -->

                    <!-- start tab content -->
                    <!-- <div class="tab-pane fade in" id="tab_sec4">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 sm-margin-30px-bottom padding-30px-left">
                                <img src="images/home/capcaitybuilding1.png" alt="" class="w-100 border-radius-8"/>
                            </div>
                            <div class="col-12 col-lg-5 col-md-6 px-5">
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">Capacity Building</h5>
                                <span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block alt-font">Kickstart and improve your tech career journey and business expertise</span>
                                <p class="alt-font">Our training is designed to equip you with the knowledge and skills to ideate and launch practical, real-world solutions that are locally inspired and globally relevant.</p>
                                <a href="capacity-buliding.html" class="btn btn-medium   btn-red">See Courses</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- end tab content -->
                </div>       
            </div>
        </section>
        <!-- end service tab section -->

@endsection