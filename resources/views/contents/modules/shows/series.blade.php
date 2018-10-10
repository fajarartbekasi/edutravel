@extends('layouts.app')

@section('content')

    <div class="content py-4">

        <div class="row">

            <div class="col-md-6">

                <h6 class="text-muted">Incomplete Lesson</h6>
                <h6 class="text-muted">Publish on Jan,27TH 2018</h6>
                <h4 class="text-muted">Step by step for learn english speak</h4>
                <h2 class="text-primary">Search partner to speaking </h2>
                <h6 class="text-dark"> Episode 1. Runtime 6:29</h6>
                <button class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-download"></i> Downlad
                </button>

                <button class="btn btn-outline-danger btn-sm">
                    <i class="fa fa-download"></i> Add To Favorite
                </button>
              
            </div>
            <div class="col-md-6">

                <p class="text-muted">
                    Before we can review how incredible and flexible Laravel is, 
                    we, of course, must first learn how to install it. 
                    In this episode, we'll review all necessary prerequisites, 
                    and then setup Composer on our machine.
                </p>
                <button type="submit" class="btn btn-outline-success">
                    Next Episode <i class="fa fa-chevron-right"></i>
                </button>

            </div>

        </div>
        <hr>

        <div class="row">
            <div class="col-md-7">
                <div class="col-md-6">

                    <h6 class="text-dark">2 Comments</h6>
                </div>
                <div class="bg-white rounded shadow-sm">

                    @include('partials.form.form')

                    <!-- discussion -->
                    <div class="discussion container">
                        <div class="row">
                            <div class="col-md-12">
                    
                            <div class="media my-3">
                                <div class="media-left mr-3">
                                <a href="">
                                    <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
                                </a>
                                </div>
                                <div class="media-body">
                                <h5 class="media-heading">
                                    <a href="">
                                        How i can install laravel in my phone
                                    </a>
                                    
                                </h5>
                                <div class="media-conversation-meta">
                                    <div class="media-conversation-replies">
                                        <a href="">
                                                
                                            
                                        </a>
                                        4 min &nbsp;
                                        
                                        <span class="fa fa-comment"></span>
                                        1 comment &nbsp;
                                        <span class="fa fa-reply"></span>
                                        1 Reply
                                    </div>
                                </div>
                                Chaerul Fajar Subhi 
                                <p class="text-muted">
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                </p>
                                </div>
                            </div>
                            <hr>
                            <div class="media my-3">
                                <div class="media-left mr-3">
                                <a href="">
                                    <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
                                </a>
                                </div>
                                <div class="media-body">
                                <h5 class="media-heading">
                                    <a href="">
                                        How i can install laravel in my phone
                                    </a>
                                    
                                </h5>
                                <div class="media-conversation-meta">
                                    <div class="media-conversation-replies">
                                        <a href="">
                                                
                                            
                                        </a>
                                        4 min &nbsp;
                                        <span class="fa fa-comment"></span>
                                        1 comment &nbsp;
                                        <span class="fa fa-reply"></span>
                                        1 Reply
                                    </div>
                                </div>
                                Chaerul Fajar Subhi 
                                <p class="text-muted">
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- end discussion -->
                
                </div>
            </div>
            <div class="col-md-5">
                <h6 class="text-muted">Step by step for learn english speak</h6>
                <ol>
                    <li class="text-primary">Search partner to speaking
                        &nbsp; 
                        <i class="fa fa-eye"></i>  
                        &nbsp;   
                        
                        6:29
                    </li>
                    <hr>
                    <li class="text-primary">Search partner to speaking
                        &nbsp; 
                        <i class="fa fa-eye"></i>  
                        &nbsp;   
                        
                        6:29
                    </li>
                    <hr>
                    <li class="text-primary">Search partner to speaking
                        &nbsp; 
                        <i class="fa fa-eye"></i>  
                        &nbsp;   
                        
                        6:29
                    </li>
                </ol>
            </div>
        </div>
    </div>

@endsection