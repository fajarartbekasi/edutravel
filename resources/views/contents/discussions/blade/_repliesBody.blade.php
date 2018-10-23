<div class="discuss-show container">
    <div class="media">
        <div class="media-body ">  
            <div class="row">
                <div class="col-md-10 ">
                    @foreach($replies as $reply )
                    <div class="discuss-body">
                        <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
                        <p>
                            <a href="http://">
                                <strong>
                                    {{ $reply->owner->name }}
                                </strong>
                                
                            </a>
                            
                            <strong class="text-muted">
                                <span class="text-muted">Published {{ $reply->created_at->diffForHumans() }}</span>
                            </strong>
                            
                        </p>
                        <div class="float-left">

                            <span class="fa fa-thumbs-up fa fa-2x"></span>
                            <strong>12</strong>
                            
                        </div>
                        
                        <div class="col-md-10 float-left">
                        
                                <p class="text-mutes">
                                {{ $reply->body }}
                                </p>
                        </div>
                
                    </div>
                    <hr>
                
                    @endforeach

                    {{ $replies->links() }}

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