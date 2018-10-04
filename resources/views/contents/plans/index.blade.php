@extends('layouts.app')

@section('content')

    <div class="col-md-6 py-4">
        <button type="submit" class="btn btn-outline-primary">New Plan</button>
    </div>
    <div class="table-responsive py-4">
        <table class="table">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Services</th>
                    <th>Plan</th>
                    <th>Price</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Services</td>
                    <td>Plan</td>
                    <td>Price</td>
                    <td>
                        <button type="submit" class="btn btn-outline-warning btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <i class="fa fa-trash"></i> Deleted
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection