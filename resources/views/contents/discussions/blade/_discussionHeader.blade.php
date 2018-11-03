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

            {{ $thread->creator->name }}
            
        </strong>
        <div class="float-right text-muted">
            @if(Auth::check())

                @can('update', $thread)
                
                    <div class="float-right my-2 my-lg-0">

                        <form action="{{ $thread->path() }}" method="post" >

                            {{ csrf_field() }}

                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-outline-danger btn-sm mr-3">

                                <span class="fa fa-trash"> This is a Spam</span>

                            </button>

                        </form>
                        
                    </div>

                @endcan
            @endif

            <subscribe-button :active="{{ json_encode($thread->isSubscribedTo) }}"></subscribe-button>
            <button type="submit" class="btn btn-outline-primary btn-sm mr-3 text-muted">

                <span class="fa fa-reply mr-3 text-muted" v-text="repliesCount">  </span>Favorites
            </button>
            <!-- <span class="fa fa-comments mr-3"> 7</span>
            <span class="fa fa-check-square mr-3"> 7</span>
            <span class="fa fa-star mr-3"> 7</span> -->

        </div>

    </div>

</div>