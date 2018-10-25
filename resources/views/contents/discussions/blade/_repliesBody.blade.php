<div class="discuss-show container">
    <div class="media">
        <div class="media-body ">  
            <div class="row">
                <div class="col-md-12">
                    @foreach($replies as $reply )
                    <div class="discuss-body">
                        <img class="media-object rounded-circle" width="30" src="{{ asset('img/avatars/user.png') }}">
                        <div class="float-right">
                            <form action="/replies/{{ $reply->id }}/favorites" method="POST">
                                 @csrf
                                 <button type="submit" class="btn btn-outline-primary btn-sm" {{ $reply->isFavorited() ? 'disabled' : ''}}>

                                     <span class="fa fa-thumbs-up fa fa-1x "></span>
                                     <strong>{{ $reply->favorites_count }} {{ str_plural('Favorite', $reply->favorites_count ) }}</strong>
                                 </button>
                                 
                            </form>
                            
                            
                        </div>
                        <p>
                            <a href="/profiles/{{ $reply->owner->name }}">
                                <strong>
                                    {{ $reply->owner->name }}
                                </strong>
                                
                            </a>
                            
                            <strong class="text-muted">
                                <span class="text-muted">Published {{ $reply->created_at->diffForHumans() }}</span>
                            </strong>
                            
                        </p>
                        
                        
                        <p class="text-muted">
                            {{ $reply->body }}
                        </p>
                        
                    </div>
                    <hr>
                    @endforeach
                    <div class="float-left">

                        {{ $replies->links() }}
                    </div>

                    @if(Auth()->check())
                        <form action="{{$thread->path().'/replies'}}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="You all will listen to answer....">

                                </textarea>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-outline-primary">
                                    Post Your Reply
                                </button>
                            </div>
                        </form>
                    @else
                    <p class="float-left" > <a href="{{ route('login') }}">Please sign in</a>to participate in this discussion.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>