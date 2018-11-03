@foreach($threads as $thread)

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <a href="{{ $thread->path() }}">
                <h3 class="pb-2 mb-0 text-info font-weight-bold">{{ $thread->title }}</h3>
            </a>

            <strong class="text-info font-weight-bold">
                {{ $thread->channel->slug }}  . 
                <strong class="text-muted"> 
                Published Published {{ $thread->created_at->diffForHumans() }} by . 
                </strong> 
                <a href="{{ route('profile', $thread->creator) }}">
                    {{ $thread->creator->name }}
                </a>
            </strong>

            <div class="media text-muted pt-3">

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray font-italic">
                
                {{ $thread->body }}
                </p>

            </div>
            
            <div class="py-3 text-md-left">

                <img class="media-object rounded-circle" width="30" height="30" src="{{ asset('img/avatars/user.png') }}">

                <strong class="text-muted font-weight-bold">
                    <a href="{{ route('profile', $thread->creator) }}" class="text-muted">
                        {{ $thread->creator->name }}
                    </a>
                    
                </strong>
                <div class="float-right text-muted">

                    <span class="fa fa-reply mr-3"> {{ $thread->replies_count }} {{ str_plural('comment',$thread->replies_count) }}</span>
                    <!-- <span class="fa fa-comments mr-3"> 7</span>
                    <span class="fa fa-check-square mr-3"> 7</span>
                    <span class="fa fa-star mr-3"> 7</span> -->

                </div>

            </div>
        
        </div>
    
@endforeach
