@extends('layouts.app')

@section('content')

    <div class="my-3 p-3 py-4 bg-white rounded shadow-sm">

        <h6 class="border-bottom border-gray pb-2 mb-0 text-muted">
        
            What are your next plans
        
        </h6>
        
        <div class="row">
            <div class="col-md-4 py-4">
                
                   <button type="submit" 
                   data-toggle="collapse" 
                   href="#addplane" 
                   aria-expanded="false" 
                   aria-controls="addplane"
                   class="btn btn-outline-success">
                   Show Form
                   </button>
                
            </div>

            <div class="col-md-8 py-4">
            
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success full!</strong> Congratulation your plan success added :-D .
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
            </div>

        </div>
        <form action="" method="post" class="collapse mt-3" id="addplane">
        
            @include('contents.plans._form')
        
        </form>
    </div>
@endsection