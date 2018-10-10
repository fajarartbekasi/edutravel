@extends('layouts.app')


@section('content')
        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <img class="media-object rounded-circle" width="100" src="{{ asset('img/avatars/user.png') }}">
                        <br>
                        <br>
                        <h4>Chaerul Fajar Subhi</h4>

                        <span>
                            
                            <i class="fa fa-user" style="margin-right: 10px"></i>
                            
                            fajarartbekasieditting@gmail.com
                            
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
                        
                        <div class="col-md-3 text-center">
                            <i class="fa fa-file fa-5x"></i>
                            <br>
                            <h6 class="text-muted py-1">Speaking</h6>
                            <hr>
                            <a href="{{ route('users.show-module.speaking') }}">
                            <span class="badge-modules badge-danger">11 series</span>
                            </a>
                            <br>
                                <h6 class="text-muted">11 Videos</h6>

                            
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="fa fa-file fa-5x"></i>
                            <br>
                            <h6 class="text-muted py-1">Speaking</h6>
                            <hr>
                            <a href="http://">
                            <span class="badge-modules badge-danger">11 series</span>
                            </a>
                            <br>
                                <h6 class="text-muted">11 Videos</h6>

                            
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="fa fa-file fa-5x"></i>
                            <br>
                            <h6 class="text-muted py-1">Speaking</h6>
                            <hr>
                            <a href="http://">
                            <span class="badge-modules badge-danger">11 series</span>
                            </a>
                            <br>
                                <h6 class="text-muted">11 Videos</h6>

                            
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="fa fa-file fa-5x"></i>
                            <br>
                            <h6 class="text-muted py-1">Speaking</h6>
                            <hr>
                            <a href="http://">
                            <span class="badge-modules badge-danger">11 series</span>
                            </a>
                            <br>
                                <h6 class="text-muted">11 Videos</h6>

                            
                        </div>

                    </div>
                </div>

                
            </div>
        </div>

        
@endsection