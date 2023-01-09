@extends('layout.app')
@section('content')
        <!-- start header -->
        @include('shared.header')
         <!-- start service tab section -->
        <section class="wow animate__fadeIn pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                       <h4 class="font-weight-600 text-extra-dark-gray alt-font text-center">{{$agency->name}}</h4> 
                    </div>
                </div>
            </div>
            <div class="container tab-style2 border-radius-8 bg-light-gray">
                <div class="row">
                    <div class="col-md-6 offset-md-3 mt-2">
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Oops!</h4>
                            <ul class="text-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                          </div>
                           
                            
                        @endif
                    </div>
                    @if(count($agency->phases) === 0)
                    <div class="col-md-6 offset-md-3 pb-5 pt-5 border-radius-8 bg-very-light-gray text-center">
                    
                        <div class="card p-4" style="border-radius: 20px; border-color: transparent; text-center">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">Coming Soon </h5>
                        
                                <p>
                                   We will reach out to you once we begin applications for <strong>{{$agency->name}}</strong>
                                </p>
                        
                            
                            <button href="#" class="btn btn-medium btn-red" disbled>Check Back in 2 weeks </button>
                        </div>
                    </div>
                    @else
                    <div class="col-12 pb-5 pt-5 border-radius-8 bg-very-light-gray">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs alt-font align-items-center">
                            @php $count = 0 @endphp
                            @foreach($agency->phases as $phase)
                            @php $count++ @endphp
                            <li class="nav-item col wow animate__fadeInUp last-paragraph-no-margin">
                                <a class="nav-link @if($count === 1) active @endif" href="#{{$phase->slug}}" data-bs-toggle="tab">
                                    <div class="feature-box-6 position-relative pt-3 pb-3">
                                        <i class="icon-genius icon-large" alt="innovation-icon"></i>
                                        <p class="alt-font font-weight-600 text-medium offset-xl-1 px-5 padding-10px-tb">{{$phase->title}}</p>
                                        <div class="feature-box-overlay bg-deep-pink"></div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            {{-- <li class="nav-item col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                                <a class="nav-link" href="#tab_sec2" data-bs-toggle="tab">
                                    <div class="feature-box-6 position-relative pt-3 pb-3">
                                        <i class="icon-lightbulb icon-large" alt="innovation-icon"></i>
                                        <p class="alt-font font-weight-600 text-medium offset-xl-1 px-5 padding-10px-tb">PHASE 2</p>
                                        <div class="feature-box-overlay bg-deep-pink"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                                <a class="nav-link" href="#tab_sec3" data-bs-toggle="tab">
                                    <div class="feature-box-6 position-relative pt-3 pb-3">
                                        <i class="icon-speedometer icon-large" alt="innovation-icon"></i>
                                        <p class="alt-font font-weight-600 text-medium offset-xl-1 px-5 padding-10px-tb">PHASE 3</p>
                                        <div class="feature-box-overlay bg-deep-pink"></div>
                                    </div>
                                </a>
                            </li> --}}
                           
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                    @endif
                </div>                                
                <div class="container-fluid tab-content pb-5 pt-5">
                    @php $ncount = 0; @endphp
                    @foreach($agency->phases as $phase)
                    @php $ncount++; @endphp
                    <!-- start tab content -->
                    <div class="tab-pane med-text fade in @if($ncount === 1) active show @endif " id="{{$phase->slug}}">
                        <div class="row align-items-center justify-content-center p-4">
                            
                            <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                                <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                                    <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">Self Mode <strong class="text-deep-pink">({{number_format($phase->self_mode_price,)}}) </strong> </h5>
                                
                                    <ul>
                                        @foreach(explode("\n", $phase->slef_mode_steps) as $step)
                                        <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                            - {{$step}}
                                        </li>
                                        @endforeach
                                    
                                    </ul>
                                
                                    
                                    <a href="#{{$phase->slug}}-{{$agency->slug}}-form" class="btn btn-medium btn-red popup-with-form" onclick="setMode(event)" target="mode-{{$phase->slug}}" mode='self'>Register Here</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-6 px-3 py-3">
                            <div class="card p-4" style="border-radius: 20px; border-color: transparent;">
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom">VIP Mode <strong class="text-deep-pink">({{number_format($phase->vip_mode_price,)}}) </strong> </h5>

                                <ul>
                                    @foreach(explode("\n", $phase->vip_mode_steps) as $step)
                                    <li class="text-large text-extra-dark-gray margin-10px-bottom d-block alt-font">
                                        - {{$step}}
                                    </li>
                                    @endforeach
                                
                                </ul>

                                
                            
                                <a href="#{{$phase->slug}}-{{$agency->slug}}-form" class="btn btn-medium btn-red popup-with-form"  onclick="setMode(event)" target="mode-{{$phase->slug}}" mode='vip'>Register Here</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    <!-- end tab content -->


                     <!-- start form -->
                    <form id="{{$phase->slug}}-{{$agency->slug}}-form" action='{{route('submit-application')}}' method="post" class="white-popup-block mfp-hide col-10 col-xxl-5 col-xxl-5 col-lg-6 col-md-6 col-sm-6 p-0 mx-auto" accept-charset='UTF-8' enctype='multipart/form-data'>
                        @csrf
                        <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                            <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Self Mode Application Form</div> 
                            <div>
                                <div class="form-results d-none"></div>
                                <input type="email" name="email" class="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input required" onblur="getUser(event)" value="{{old('email')}}">
                                <input type="text" name="first_name" class="first_name" placeholder="First Name*" fieldType=7 class="border-radius-4 bg-white medium-input required" value="{{old('first_name')}}">
                                <input type="text" name="last_name" class="last_name" placeholder="Last Name*" fieldType=7 class="border-radius-4 bg-white medium-input required" value="{{old('last_name')}}">
                                <input type="text" name="middle_name" class="middle_name" placeholder="Middle Name*" fieldType=7 class="border-radius-4 bg-white medium-input" value="{{old('middle_name')}}">
                                <input type="text" name="phone" class="phone" placeholder="Phone*" fieldType=7 class="border-radius-4 bg-white medium-input required" value="{{old('phone')}}">
                                <input type="text" name="telegram_phone" class="telegram_phone" placeholder="Telegram Phone Number" fieldType=7 class="border-radius-4 bg-white medium-input" value="{{old('telegram_phone')}}">
                               
                                <input type="hidden" name="agency_id"  value="{{$agency->id}}">
                                <input type="hidden" name="phase_id"  value="{{$phase->id}}">
                                <input type="hidden" name="mode"  value="" id="mode-{{$phase->slug}}">                               
                               
                                <p class="text-extra-small">We shall contact you using the information you provide here.</p>
                                <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black zf-submitColor">Submit</button>
                            </div>
                        </div>
                    </form>



                    {{-- <form id="vip-mode-{{$phase->slug}}-{{$agency->slug}}-form" action='#' method="post" class="white-popup-block mfp-hide col-10 col-xxl-5 col-xxl-5 col-lg-6 col-md-6 col-sm-6 p-0 mx-auto" accept-charset='UTF-8' enctype='multipart/form-data'>
                        <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                            <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Self Mode Application Form</div> 
                            <div>
                                <div class="form-results d-none"></div>
                                <input type="email" name="email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input required">
                                <input type="text" name="first_name" id="first_name" placeholder="First Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name*" fieldType=7 class="border-radius-4 bg-white medium-input ">
                                <input type="text" name="phone" id="phone" placeholder="Phone*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                <input type="text" name="telegram_phone" id="telegram_phone" placeholder="Phone*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                <input type="text" name="telegram_phone" id="telegram_phone" placeholder="Phone*" fieldType=7 class="border-radius-4 bg-white medium-input required">
                                <input type="hidden" name="agency_id"  value="{{$agency->id}}">
                                <input type="hidden" name="phase_id"  value="{{$phase->id}}
                                "> 
                                <input type="hidden" name="mode"  value="vip">                               
                                <textarea name="MultiLine" id="comment" rows="5" placeholder="Any message for us?" class="border-radius-4 bg-white medium-input"></textarea>
                                <p class="text-extra-small">We shall contact you using the information you provide here.</p>
                                <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black zf-submitColor">Submit</button>
                            </div>
                        </div>
                    </form> --}}
                    @endforeach


                   
                    <!-- end tab content -->
                </div>       
            </div>
           
        </section>
        <!-- end service tab section -->

        <script>
            const setMode = (event)=>{
                const target = event.target.getAttribute('target');
                document.querySelector('#'+target).value = event.target.getAttribute('mode')
            }

            const getUser = (event)=>{
                const email = event.target.value;
                if(email.length > 0){
                    fetch("{{route('get-user')}}?email="+email, {
                    })
                    .then((resp)=>{
                        return resp.json();
                    })
                    .then((feedback)=>{
                        console.log(feedback)
                        if(feedback !== null){
                            fillFeeds(feedback)
                        }
                    })
                }
                
            }

            const fillFeeds = (user_data)=>{
                document.querySelectorAll('.first_name').forEach(function(input, index){
                    input.value = user_data.first_name;
                })
                document.querySelectorAll('.last_name').forEach(function(input, index){
                    input.value = user_data.last_name;
                })
                document.querySelectorAll('.middle_name').forEach(function(input, index){
                    input.value = user_data.middle_name;
                })
                document.querySelectorAll('.phone').forEach(function(input, index){
                    input.value = user_data.phone;
                })
                document.querySelectorAll('.telegram_phone').forEach(function(input, index){
                    input.value = user_data.telegram_phone;
                })
            }
        </script>
@endsection