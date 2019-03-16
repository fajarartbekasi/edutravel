@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 py-4 ">
            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Atention Pleas!</strong> 
                Order data will appear if payment has been made.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <div class="table-responsive py-4">
        <table class="table">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Name</th>
                    <th>Plan</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Services</td>
                    <td>Plan</td>
                    <td>
                        <a href="{{ route('users.show.booking') }}">
                            <button type="submit" class="btn btn-outline-primary btn-sm">
                                <i class="fa fa-search"></i> Show
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection