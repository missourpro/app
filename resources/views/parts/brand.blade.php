<section id="brand" class="container-fluid shadow-sm bg-white p-4 mb-2 ">
    <div class="row align-items-center">
        <div class="col-3">
            <img src="{{asset('img/logo.png')}}" class="w-100" alt="">
        </div>
        <div class="col-7 h-100">
            <form id="search-form" action="">
                <div class="form-row   h-100">
                    <div class="input-group input-group-lg  w-100">
                        <input type="text" class="form-control" placeholder="Type here...">
                        <div class="input-group-append">
                            <button class="input-group-text btn btn-primary text-white"><i class="fas fa-search"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        @auth
            <div class="col-2">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown"
                           class="nav-link dropdown-toggle btn btn-outline-primary text-truncate p-1" href="#"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </div>
        @else
            <div class="col-1">

                <a href="{{route('login')}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-user"></i>
                    Login</a>
            </div>
            <div class="col-1">
                <a href="{{route('register')}}" class="btn btn-primary btn-sm">Sign Up</a>
            </div>

        @endauth

    </div>




</section>
