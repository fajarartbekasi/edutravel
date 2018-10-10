@extends('layouts.app')


@section('content')
  
    <div class="row">

        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 offset-md-1">
                        <img class="media-object rounded-circle" width="100" src="{{ asset('img/avatars/user.png') }}">
                        <br>
                        <br>
                        <h4>Chaerul Fajar Subhi</h4>

                        <span>
                            
                            <i class="fa fa-user" style="margin-right: 10px"></i>
                            
                            fajarartbekasieditting@gmail.com
                            
                        </span>
                        <br/>

                        <button type="submit" class="btn btn-outline-primary">
                            <i class="fa fa-check"> &nbsp; Approved</i>
                        </button>
                        <button type="submit" class="btn btn-outline-danger">
                            <i class="fa fa-times"> &nbsp; Un Approved</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 offset-2 py-4">
        
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" 
                    id="nav-home-tab" data-toggle="tab" 
                    href="#nav-home" 
                    role="tab" 
                    aria-controls="nav-home" 
                    aria-selected="true">
                    
                    <i class="fa fa-cart-plus"></i>
                    Youre order
                    
                    </a>
                    
                    <a class="nav-item nav-link" 
                    id="nav-profile-tab" 
                    data-toggle="tab" 
                    href="#nav-profile" 
                    role="tab" 
                    aria-controls="nav-profile" 
                    aria-selected="false">
                    
                    <i class="fa fa-info"></i>
                    Informarions
                    
                    </a>
                    
                    <a class="nav-item nav-link" 
                    id="nav-contact-tab" 
                    data-toggle="tab" 
                    href="#nav-contact" 
                    role="tab" 
                    aria-controls="nav-contact" 
                    aria-selected="false">
                    
                    <i class="fa fa-credit-card"></i>
                    Payments
                    
                    </a>
                    

                </div>

            </nav>

            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    @include('contents.bookings.menu._tab1')
                    
                </div>
                
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                
                    @include('contents.bookings.menu._tab2')
                    
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                    @include('contents.bookings.menu._tab3')
                
                </div>
                
                
            </div>
        </div>
    </div>
@endsection