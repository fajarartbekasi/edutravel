@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <img class="media-object rounded-circle" width="100" src="{{ asset('img/modules/speaking.jpg') }}">
                <br>
                <br>
                <h4>Speaking</h4>

                <span>
                    
                    <p class="text-muted">

                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                    </p>
                </span>
                <br/> 
            </div>
        </div>

    </div>
</div>
<div class="album py-5 ">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="shadow p-3 mb-5 card mb-4 ">
                    <img class="card-img-top" src="{{ asset('img/modules/test.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-warning">Step by step for learn english speak</h5>
                        <p class="card-text">
                            <span class="badge badge-primary">Step 1</span>
                            11 Lessons | Beginner
                        
                        </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('users.series.Step-by-step-for-learn-english-speak') }}">
                                
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                            </a>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="shadow p-3 mb-5 card mb-4 ">
                <img class="card-img-top" src="{{ asset('img/modules/test.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-warning">Step by step for learn english speak</h5>
                    <p class="card-text">
                        <span class="badge badge-primary">Step 1</span>
                        11 Lessons | Beginner
                    
                    </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="shadow p-3 mb-5 card mb-4 ">
                <img class="card-img-top" src="{{ asset('img/modules/test.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-warning">Step by step for learn english speak</h5>
                    <p class="card-text">
                        <span class="badge badge-primary">Step 1</span>
                        11 Lessons | Beginner
                    
                    </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection