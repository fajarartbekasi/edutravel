<ul class="nav nav-tabs justify-content-center shadow bg-white">
  <li class="nav-item dropdown ">
    <span class="nav-link dropdown-toggle text-muted fa fa-ellipsis-v" 
       data-toggle="dropdown" 
       href="#" role="button" 
       aria-haspopup="true" 
       aria-expanded="false"> Chose A Filter
    </span>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">
        <span class="fa fa-globe mr-2">All Threads</span> 
      </a>
        @if(Auth::check())
        <a class="dropdown-item" href="/threads?by={{ auth()->user()->name }}">
          <span class="fa fa-bolt mr-2 text-muted">

            My Question
          </span>
        </a>
        @endif
        <a class="dropdown-item" href="#">
          <span class="fa fa-star mr-2 text-muted">
            My Favorite
          </span>
        </a>
      
        <a class="dropdown-item" href="/threads?popular=1">
          <span class="fa fa-fire mr-2 text-muted">
            Popular
          </span>
        </a>
      <a class="dropdown-item" href="/threads?unanswered=1">
        
        <span class="fa fa-thumbs-down mr-2 text-muted">
          Unswared
        </span>
      </a>
    </div>
  </li>

  <li class="nav-item dropdown ">
    <span class="nav-link dropdown-toggle text-muted fa fa-ellipsis-v" 
       data-toggle="dropdown" 
       href="#" role="button" 
       aria-haspopup="true" 
       aria-expanded="false"> Or Pick A Channel
    </span>
    <div class="dropdown-menu">
      @forelse($channels as $channel)
        <a class="dropdown-item" href="/threads/{{ $channel->slug }}">
          
          <span class="fa fa-cirlce mr-2">
            {{ $channel->name }}
          </span>
            
        </a>
        @empty

        <span class="dropdown-item">
          Empty channel
        </span>
        
      @endforelse
    </div>
  </li>
</ul>