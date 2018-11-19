<div class="tab-pane" id="two">
    <ul class="list-group ">
        <li class="list-group-item tex-muted border-0">
            <a href="/threads" class="text-muted mr-2">
                <span class="fa fa-globe mr-2 ">All Thread</span>
            </a>
        </li>
        <li class="list-group-item border-0">
        @if(Auth::check())
            <a class="text-muted" href="/threads?by={{ auth()->user()->name }}">
                <span class="fa fa-bolt mr-2 text-muted">
                    My Question
                </span>
            </a>
        @endif
        </li>
        <li class="list-group-item border-0">
            <a class="text-muted" href="/threads?popular=1">
                <span class="fa fa-fire mr-2 text-muted">
                    Popular
                </span>
            </a>
        </li>
        <li class="list-group-item border-0">
            <a class="text-muted" href="/threads?unanswered=1">

                <span class="fa fa-thumbs-down mr-2 text-muted">
                    Unswared
                </span>
            </a>
        </li>
    </ul>
  </div>