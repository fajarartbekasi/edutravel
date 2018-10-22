<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted">OR PICK A CHANNEL</span>
    
</h4>

<ul class="list-group mb-3">
    
    <li class="list-group-item d-flex justify-content-between lh-condensed">

        <h5>
            <span class="fa fa-circle text-muted" > 
                <a href="/threads" class="text-muted">
                    All Threads
                </a> 
            </span>
        </h5>
    
    </li>
            
        
    @foreach($channels as $channel)
    <li class="list-group-item d-flex justify-content-between lh-condensed">

        <h5>
            <span class="fa fa-circle text-muted" > 
                <a href="/threads/{{ $channel->slug }}" class="text-muted">
                    {{ $channel->name }}
                </a> 
            </span>
        </h5>
    
    </li>
    
    @endforeach
</ul>