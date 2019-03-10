@if (Route::has('login'))
    @auth
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase text-muted" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    What Youre Choise
                    <img src="https://secure.gravatar.com/avatar/9465c78eee69cad31814f188cd40901e?s=60&amp;d=identicon"
                        alt="ChaerulSubhi"
                        class="img-responsive rounded-circle"
                        width="25"
                        height="25">
                </a>
                <div class="dropdown-menu dropdown-menu-right border-0 rounded-bottom-1 shadow" aria-labelledby="navbarDropdown">

                    <div class="dropdown-header pb-0">
                        <h6>Signed in as</h6>
                        <h6 class="text-dark font-weight-bold">ChaerulSubhi</h6>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="/threads" class="dropdown-item">Threads</a>
                    <a href="/channels" class="dropdown-item">Channels</a>
                    <a href="" class="dropdown-item">Events</a>
                    <logout-button route="">Sign Out</logout-button>
                </div>
            </li>
        </ul>
    </div>
    @else
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto ml-3">
            <li class="nav-item active">
                <a class="nav-link text-muted" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="#">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="#">Switch account</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    What Youre Choise
                </a>
                <div class="dropdown-menu dropdown-menu-right border-0 rounded-bottom-1 shadow" aria-labelledby="navbarDropdown">
                    <a href="{{ route('login') }}" class="dropdown-item">LogIn</a>
                    <a href="{{ route('register') }}" class="dropdown-item">SignIn</a>
                </div>
            </li>
        </ul>
    </div>
    @endauth
@endif
