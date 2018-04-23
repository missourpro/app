<section id="featured">
    <div class="container-fluid bg-white p-3 mb-2">
        <div class="row">
            <div class="col-12 col-md-8">

                @include('parts.carousel')
            </div>
            <div class="col-md-4 d-none d-sm-block">
                @auth
                    <div class="btn-group m-1" role="group">
                        <a href="" class="btn btn-outline-primary"><i class="fas fa-plus"></i></a>
                        <a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>

                        <a href="" class="btn btn-outline-primary"><i class="fas fa-minus"></i></a>
                    </div>
                @endauth
                <div class="row mb-2 ">
                    <div class="col-12 zoom"><img class="w-100" src="{{asset('storage/img/app1_0.jpg')}}" alt="...">
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 zoom"><img class="w-100" src="{{asset('storage/img/app1_0.jpg')}}" alt="...">
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>
