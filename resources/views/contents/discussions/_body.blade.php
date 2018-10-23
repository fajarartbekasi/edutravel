@foreach($threads as $thread)
    <div class="media my-3">
        <div class="media-left mr-3">
            <a href="">
                <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
            </a>
        </div>
        <div class="media-body">
            <strong class="media-heading">
                <a href="{{ $thread->path() }}">
                   {{ $thread->title }}
                </a>
            
            </strong>
            <p>
                <strong class="text-muted">
                    <a href="" class="font-weight-bold"> {{ $thread->channel->slug }} </a>
                    <span class="text-muted">. Published {{ $thread->created_at->diffForHumans() }}</span>
                    by <a href="" class="font-weight-bold">{{ $thread->creator->name }}</a>
                </strong>
                
            </p>
            
            <div class="float-left text-muted">

                <span class="fa fa-reply fa fa-2x"></span>
                <strong>
                     {{ $thread->replies_count }}
                </strong>
                
            </div>
            
            <div class="col-md-10 float-left text-muted">
            
                    <p class="text-mutes">
                    {{ $thread->body }}
                    </p>
            </div>
        </div>
    </div>
@endforeach
