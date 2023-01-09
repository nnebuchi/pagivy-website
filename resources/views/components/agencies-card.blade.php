<section class="wow animate__fadeIn bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($agencies as $agency)
                <!-- start features box item -->
                <div class="col-12 col-lg-4 col-md-4 col-sm-8 last-paragraph-no-margin md-margin-30px-bottom xs-margin-15px-bottom padding-20px-bottom">
                    <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
                        <div class="padding-5px-all d-inline-block margin-30px-bottom sm-margin-30px-bottom bg-light-gray w-50"><img src="{{asset('images/agencies/'.$agency->logo)}}" alt=""/></div>
                        <p class="text-large text-extra-dark-gray font-weight-600 mb-2">{{$agency->name}}</p>
                        {{-- <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                        <a href="{{ route('agency-detail', $agency->slug) }}" class="btn btn-small btn-red">Register Here</a>
                    </div>                    
                </div>
                <!-- end features box item -->
            @endforeach
           
          
        </div>
    </div>
</section>