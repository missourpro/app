<section id="apps" >
    <div class="section apps container-fluid bg-teal mb-2 p-3">

        <h1 class="section-title text-center display-4 mb-5 text-white"><span>Apps</span></h1>
        <div class="card-deck">

            @for($j=0;$j<3;$j++)
                <div class="card">
                    <div class="zoom">
                        <img class="card-img-top" src="{{asset('storage/img/app1_0.jpg')}}"
                             alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Captain Strike Zombies: Global Alliance</h5>

                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item"><i class="fas fa-check-square"></i> Single Licence</li>
                        <li class="list-group-item"><i class="far fa-square"></i> Multiple License</li>
                        <li class="list-group-item"><i class="fas fa-check-square"></i> Reskin &amp; Launch Service</li>

                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link btn btn-primary"><i class="fas fa-dollar-sign"></i>50 </a>
                        <a href="#" class="card-link">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </a>
                    </div>

                </div>
            @endfor

        </div>
        <div class="w-100">
            <a href="" class="btn btn-primary btn-lg  mt-3"><i class="fas fa-chevron-circle-down"> </i> View more apps</a>
        </div>

    </div>
</section>
