           
<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted">CHOOSE A FILTER</span>
    
</h4>

<ul class="list-group mb-3">
    
    <li class="list-group-item d-flex justify-content-between lh-condensed">

        <h5>
                <span class="fa fa-globe text-muted" > 
                All Threads 
            </span>
        </h5>
    
    </li>
    <li class="list-group-item d-flex justify-content-between lh-condensed">
        @if(Auth()->check())
            
            <h5>
                <span class="fa fa-question text-muted" > 
                    <a href="/threads?by={{ auth()->user()->name }}" class="text-muted">
                        My Questions
                    </a>
                </span>
            </h5>
        
        @endif
        
    
    </li>
    
</ul>