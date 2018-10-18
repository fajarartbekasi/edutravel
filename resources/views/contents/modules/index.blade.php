@extends('layouts.app')


@section('content')
        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <img class="media-object rounded-circle" width="100" src="{{ asset('img/avatars/user.png') }}">
                        <br>
                        <br>
                        <h1>Chaerul Fajar Subhi</h1>

                        <span class="text-primary">
                            
                            <i class="fa fa-user"  style="margin-right: 10px"></i>
                            
                            <strong >

                                fajarartbekasieditting@gmail.com
                            </strong>
                            
                        </span>
                        <br/>

                        
                        <button type="submit" class="btn btn-outline-primary" 
                                data-toggle="collapse" href="#modules" 
                                aria-expanded="false" aria-controls="modules" 
                        >
                            What Do You Want Learn <i class="fa fa-question"> </i>
                        </button>
                        
                    </div>
                </div>

                <div class="collapse mt-3" id="modules">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="shadow p-3 mb-5 card mb-4 ">
                                <img class="card-img-top" src="{{ asset('img/modules/test.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="text-warning">Speaking</h5>
                                    <p class="card-text">
                                        <span class="badge badge-primary">Step 1</span>
                                        <small class="text-dark">

                                            11 Lessons | Beginner
                                        </small>
                                    
                                    </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('users.show-module.speaking') }}">
                                            
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                        </a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shadow p-3 mb-5 card mb-4 ">
                                <img class="card-img-top" src="{{ asset('img/modules/test.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="text-warning">Speaking</h5>
                                    <p class="card-text">
                                        <span class="badge badge-primary">Step 1</span>
                                        <small class="text-dark">

                                            11 Lessons | Beginner
                                        </small>
                                    
                                    </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('users.show-module.speaking') }}">
                                            
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                        </a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shadow p-3 mb-5 card mb-4 ">
                                <img class="card-img-top" src="{{ asset('img/modules/test.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="text-warning">Speaking</h5>
                                    <p class="card-text">
                                        <span class="badge badge-primary">Step 1</span>
                                        <small class="text-dark">

                                            11 Lessons | Beginner
                                        </small>
                                    
                                    </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('users.show-module.speaking') }}">
                                            
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                        </a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shadow p-3 mb-5 card mb-4 ">
                                <img class="card-img-top" src="{{ asset('img/modules/test.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="text-warning">Speaking</h5>
                                    <p class="card-text">
                                        <span class="badge badge-primary">Step 1</span>
                                        <small class="text-dark">

                                            11 Lessons | Beginner
                                        </small>
                                    
                                    </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('users.show-module.speaking') }}">
                                            
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                        </a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
@endsection