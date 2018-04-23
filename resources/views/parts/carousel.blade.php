<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

        <div class="carousel-item active position-relative">
            @auth
                <div class="btn-group m-1 position-absolute" role="group" style="z-index: 1">
                    <a href="" class="btn btn-outline-primary"><i class="fas fa-plus"></i></a>
                    <a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>

                    <a href="" class="btn btn-outline-primary"><i class="fas fa-minus"></i></a>
                </div>
            @endauth
            <img class="d-block w-100" src="{{asset('storage/img/app1_0.jpg')}}" alt="First slide">
        </div>
        @for($i=0;$i<3; $i++)

            <div class="carousel-item">
                @auth
                    <div class="btn-group m-1 position-absolute" role="group" style="z-index: 10">
                        <a href="" class="btn btn-outline-primary"><i class="fas fa-plus"></i></a>
                        <a href="" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>

                        <a href="" class="btn btn-outline-primary"><i class="fas fa-minus"></i></a>
                    </div>
                @endauth
                <img class="d-block w-100" src="{{asset('storage/img/app1_0.jpg')}}" alt="First slide">
            </div>
        @endfor

    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
