<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center padding-15px-tb">
            <div class="col-12 col-lg-10 lg-w-60 sm-w-85">
                <h5 class="alt-font text-black font-weight-500 mb-3 text-center pb-3">Our Trusted agencies.</h5>
            </div>
                <div class="col-12 col-lg-10">
                <div class="row row-cols-3 row-cols-md-5 row-cols-sm-3 align-items-center alt-font">
                    @foreach($agencies as $agency)
                    <!-- start features box item -->
                    <a href="{{ route('agency-detail', $agency->slug) }}">
                        <div class="col text-center sm-margin-30px-bottom wow animate__zoomIn border-all padding-15px-tb border-radius-8">
                            <img src="{{asset('images/agencies/'.$agency->logo)}}" alt="">
                            <p class="alt-font margin-10px-top mb-0">{{$agency->name}}</p>
                        </div>
                    </a>
                    
                    <!-- end features box item -->
                    @endforeach
                </div>
            </div>
        </div> 
    </div>
</section>