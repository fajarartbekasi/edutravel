@foreach($replies as $reply )
    <reply :attributes="{{ $reply }}" inline-template v-cloak>
        <div class="discuss-show container">
            <div class="media">
                <div class="media-body ">  
                    <div class="row">
                        <div class="col-md-12">
                            <div id="reply-{{ $reply->id }}" class="discuss-body">
                                    <img class="media-object rounded-circle" width="30" src="{{ asset('img/avatars/user.png') }}">
                                    <div class="float-right">
                                        <div class="row">
                                            <div class="col-md-4 float-right">
                                                <form action="/replies/{{ $reply->id }}/favorites" method="POST">
                                                        @csrf
                                                        <div class="float-right">
                                                            <button type="submit" class="btn btn-outline-primary btn-sm" {{ $reply->isFavorited() ? 'disabled' : ''}}>

                                                                <span class="fa fa-thumbs-up fa fa-1x "></span>
                                                                <strong>{{ $reply->favorites_count }} {{ str_plural('Favorite', $reply->favorites_count ) }}</strong>
                                                            </button>
                                                        </div>
                                                </form>
                                                
                                            </div>
                                            @if(Auth::check())
                                                @can('update', $reply)
                                                    <div class="col-md-4 ">
                                                        <form action="/replies/{{ $reply->id }}" method="POST">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <div class="float-right">
                                                                <button type="submit" class="btn btn-outline-danger btn-sm">

                                                                    <span class="fa fa-trash fa fa-1x "> Deleted reply</span>
                                                                    
                                                                </button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                    <div class="col-md-4">
                                                    
                                                        <button class="btn btn-outline-danger btn-sm"  @click="editting = true">

                                                            <span class="fa fa-pencil fa fa-1x "> Edit reply</span>
                                                            
                                                        </button>
                                                        
                                                    </div>
                                                @endcan
                                            @endif

                                        </div>
                                        
                                    </div>
                                    <p>
                                        <a href="{{ route('profile', $reply->owner) }}">
                                            <strong>
                                                {{ $reply->owner->name }}
                                            </strong>
                                            
                                        </a>
                                        
                                        <strong class="text-muted">
                                            <span class="text-muted">Published {{ $reply->created_at->diffForHumans() }}</span>
                                        </strong>
                                        
                                    </p>
                                    
                                    <div v-if="editting">
                                        <div class="form-group"> 

                                            <textarea name="" id="" class="form-control" v-model="body">
    
                                            </textarea>
                                        </div>
                                        <button type="button" class="btn btn-outline-secondary " @click="editting = false">Cancel</button>
                                        <button type="button" class="btn btn-outline-info" @click="update">Update youre reply</button>
                                    </div>
                                    <div v-else v-text="body">

                                       
                                    </div>
                                    
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </reply>
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