@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <img class="media-object rounded-circle" width="300" src="{{ asset('img/modules/test.jpg')}}">
                
                <h4>Speaking</h4>
                <h4>0 % Complete</h4>

                <span>
                    
                    <p class="text-muted">

                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                    </p> 
                </span>
                <br/> 

                        
                <button type="submit" class="btn btn-primary">
                    Begin Series
                </button>
                <button type="submit" class="btn btn-outline-warning">
                    Add To Watchlist
                </button>
                
                
            </div>
        </div>

    </div>
</div>

<div class="bg-white rounded shadow-sm">

    <!-- discussion -->
    <div class="discussion container">
        <div class="row">
            <div class="col-md-12">
        
                <div class="media my-3">
                    <div class="media-left mr-3">
                        <a href="">
                            <img class="media-object rounded-circle" width="100" src="{{ asset('img/avatars/user.png') }}">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">
                            <a href="{{ route('users.series.Search-partner-to-speaking') }}">
                                Search partner to speaking
                            </a>
                        
                        </h5>
                        <div class="media-conversation-meta">
                            <div class="media-conversation-replies">
                                
                                Episode 1 &nbsp;
                            
                                Runtime 6:29 &nbsp;
                                
                            </div>
                        </div>
                        <p class="text-muted">
                        <button type="submit" class="btn btn-sm btn-primary">Task Complete</button>
                        <br>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
        <!-- end discussion -->
    
</div>

@endsection