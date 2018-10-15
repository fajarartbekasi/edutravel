@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h1 class="font-weight-bold"> {{ $thread->title }}</h1>
        <p>
            <strong class="text-muted">
                <span class="text-muted">Published 5 months ago</span>
                by <a href="">Chaerul Fajar Subhi</a>
            </strong>
        </p>
        <div class="row">
            <div class="col-md-6">
                <a href="http://" class="text-muted" title="Edit Your Discussion">
                    <span class="fa fa-pencil "></span>
                </a>
                &nbsp;
                <a href="http://" class="text-muted" title="Want an email each time this thread receives a new reply?">
                    <span class="fa fa-envelope "></span>
                </a>
                &nbsp;
                <a href="http://" class="text-muted" title="Want to favorite this conversation ?">
                    <span class="fa fa-star"></span>
                </a>
                &nbsp;
                <a href="http://" class="text-muted" title="Is this conversation full of spam? Sheesh - people, right?">
                    <span class="text-muted">
                        <img class="media-object rounded-circle" width="30" height="30" src="{{ asset('img/avatars/iconpasta.svg') }}">
                    </span>
                </a>
               
            </div>
            
        </div>
         <p class="text-muted">
             {{ $thread->body }}
        </p>
</div>
<hr>
<div class="discuss-show container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="media">
                    <div class="media-body ">  
                        <div class="discuss-body">
                            <p>
                                <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
                                <a href="http://">
                                    <strong>
                                        Tayllor Otwell
                                    </strong>
                                    
                                </a>
                                
                                <strong class="text-muted">
                                    <span class="text-muted">Published 5 months ago</span>
                                </strong>
                                
                            </p>
                            <div class="float-left">

                                <span class="fa fa-thumbs-up fa fa-2x"></span>
                                <strong>12</strong>
                                
                            </div>
                            
                            <div class="col-md-10 float-left">
                               
                                    <p class="text-mutes">
                                        Hi, I have two tables that has one to one relationship, when I try to access data from 2nd table, I get the "TypeError: Cannot read property '...
                                    </p>
                            </div>
                    
                        </div>

                        <hr>
                        <div class="discuss-body">
                            <p>
                                <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
                                <a href="http://">
                                    <strong>
                                        Tayllor Otwell
                                    </strong>
                                    
                                </a>
                                
                                <strong class="text-muted">
                                    <span class="text-muted">Published 5 months ago</span>
                                </strong>
                                
                            </p>
                            <div class="float-left">

                                <span class="fa fa-thumbs-up fa fa-2x"></span>
                                <strong>12</strong>
                                
                            </div>
                            
                            <div class="col-md-10 float-left">
                               
                                    <p class="text-muted">
                                        Hi, I have two tables that has one to one relationship, when I try to access data from 2nd table, I get the "TypeError: Cannot read property '...
                                    </p>
                            </div>
                    
                        </div>
                        
                        <form action="" method="post">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="You all will listen to answe....">

                                </textarea>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-outline-primary">
                                    Post Your Reply
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection