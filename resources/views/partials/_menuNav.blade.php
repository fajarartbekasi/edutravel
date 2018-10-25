 @if (Route::has('login'))

        @auth
           <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        
                <div class="col-md-8 col-md-offset-3">

                    <form action="" class="search-form">

                            <div class="form-group has-feedback">
                
                                <label for="search" class="sr-only">Search</label>
                    
                                <span class="fa fa-search form-control-feedback"></span>
                    
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                    
                            </div>

                    </form>
                
                </div>

                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle text-muted" href="https://example.com" 
                            id="dropdown01" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                            
                            <i class="fa fa-gear">
                
                                <span class=" badge badge-secondary">11</span> 

                            </i>

                            Settings
                        
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a href="{{ route('profile', Auth::user()) }}" class="dropdown-item fa fa-user text-muted">
                                My Profile
                            </a>
                            <a href="{{ route('logout') }}" class="dropdown-item fa fa-sign-out text-muted" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        
                        </div>
                    
                    </li>
                
                </ul>

            </div>
        @else
            <div class="navbar-collapse offcanvas-collapse " id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto ">
                    
                    <li class="nav-item dropdown">
                        <a href="{{ route('login') }}" class="nav-link text-muted ">Login</a>
                        <a href="{{ route('register') }}" class="nav-link text-muted">Register</a>
                    </li>
                </ul>
            </div>
        @endauth
  
@endif
 
 
