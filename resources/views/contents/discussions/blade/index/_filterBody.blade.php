<div class="tab-pane" id="two">
    <ul class="list-group ">
        <li class="list-group-item tex-muted border-0">
            <a href="/threads" class="text-muted ">
                <span class="fa fa-globe mr-3 "></span>
                All Thread
            </a>
        </li>
        <li class="list-group-item border-0">
        @if(Auth::check())
            <a class="text-muted" href="/threads?by={{ auth()->user()->name }}">
                <span class="fa fa-bolt mr-3 text-muted">
                </span>
                My Question
            </a>
        @endif
        </li>
        <li class="list-group-item border-0">
            <a class="text-muted" href="/threads?popular=1">
                <span class="fa fa-fire mr-3 text-muted">
                </span>
                Popular
            </a>
        </li>
        <li class="list-group-item border-0">
            <a class="text-muted" href="/threads?unanswered=1">
                <span class="fa fa-thumbs-down mr-3 text-muted">
                </span>
                Unswared
            </a>
        </li>
    </ul>
  </div>