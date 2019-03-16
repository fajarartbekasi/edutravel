@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <form action="/channels/store" method="post" class="pt-3">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="channel">Channel Name :</label>
                    <input type="text" name="name" id="channel" class="form-control" placeholder="Channel name...." required>
                </div>
                <button type="submit" class="btn btn-outline-primary">
                    Publish Channel
                </button>
            </div>
        </form>
    </div>
@endsection