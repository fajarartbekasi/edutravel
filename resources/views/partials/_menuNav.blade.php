 @if (Route::has('login'))
    @auth
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-muted" href="/threads">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="/channels">Channel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="">Event</a>
            </li>
        </ul>
        <ul class="navbar-nav text-muted">
            <user-notifications></user-notifications>
            <li class="nav-item dropdown mr-3">
                <span class="nav-link dropdown-toggle fa fa-user text-muted"
                    id="dropdown01"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    My EduTravels
                </span>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                    <a href="{{ route('logout') }}" class="dropdown-item fa fa-sign-out text-muted" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        @else
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link text-muted ">Login</a>
            <li>
            <li class="nav-item ">
                <a href="{{ route('register') }}" class="nav-link text-muted">Register</a>
            </li>
        </ul>
    @endauth
@endif
