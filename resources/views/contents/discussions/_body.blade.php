@foreach($threads as $thread)
    <div class="media my-3">
        <div class="media-left mr-3">
            <a href="">
                <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
            </a>
        </div>
        <div class="media-body">
            <h5 class="media-heading">
                <a href="{{ $thread->path() }}">
                   {{ $thread->title }}
                </a>
            
            </h5>
            <div class="media-conversation-meta">
                <div class="media-conversation-replies">
                    <a href="">
                        
                    </a>
                    {{ $thread->created_at->diffForHumans() }} &nbsp;
                    
                    <span class="fa fa-comment"></span>
                    1 comment &nbsp;
                    <span class="fa fa-reply"></span>
                    1 Reply
                </div>
            </div>
            {{ $thread->creator->name }}
            <p class="text-muted">
            {{ $thread->body }}
            </p>
        </div>
    </div>
@endforeach