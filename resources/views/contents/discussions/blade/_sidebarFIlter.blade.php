           
<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted">CHOOSE A FILTER</span>
    
</h4>

<ul class="list-group mb-3">
    
    <li class="list-group-item d-flex justify-content-between lh-condensed">

        <h5>
            <span class="fa fa-globe text-muted" > 
                <a href="/threads" class="text-muted">
                    All Threads
                </a>
            </span>
        </h5>
    
    </li>
    @if(Auth()->check())
    <li class="list-group-item d-flex justify-content-between lh-condensed">
            
            <h5>
                <span class="fa fa-question text-muted" > 
                    <a href="/threads?by={{ auth()->user()->name }}" class="text-muted">
                        My Questions
                    </a>
                </span>
            </h5>
        
            
            
        </li>
        @endif

    <li class="list-group-item d-flex justify-content-between lh-condensed">

        <h5>
            <span class="fa fa-circle text-muted" > 
                <a href="/threads?popular=1" class="text-muted">
                    Popular Threads
                </a> 
            </span>
        </h5>
        
    
    </li>
    <li class="list-group-item d-flex justify-content-between lh-condensed">

        <h5>
            <span class="fa fa-circle text-muted" > 
                <a href="/threads?unanswered=1" class="text-muted">
                    Unanswered Threads
                </a> 
            </span>
        </h5>
    
    </li>
    
</ul>