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
                
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle fa fa-user" 
                        id="dropdown01" 
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                    &nbsp; My EduTravels
                    </span>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle fa fa-bell text-muted" 
                        id="dropdown01" 
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                    &nbsp; Notifications
                    </span>
                    
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
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
 
 
