 @if (Route::has('login'))

        @auth
           <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-muted" href="#">Skills <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="/threads">Disscusions</a>
                </li>
                
            </ul>
            <ul class="navbar-nav text-muted">
                <user-notifications></user-notifications>
                
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle fa fa-user text-muted" 
                        id="dropdown01" 
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                    &nbsp; My EduTravels
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
            <ul class="nav mr-sm-2">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link text-muted ">Login</a>
                <li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link text-muted">Register</a>
                </li>
            </ul>
        @endauth
  
@endif
 
 
