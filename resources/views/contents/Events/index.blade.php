@extends('layouts.app')

@section('content')
<div class='d-flex container pt-3 justify-content-center'>
    <div class='blog-posts pt-3'>
        <div class='post featured shadow'>
            <div class='image' style='background-image: url(img/footbridge.jpg)'>
                <div class='time'>
                    <div class='date'>04</div>
                    <div class='month'>APR</div>
                </div>
            </div>
            <div class='content pt-5'>
                <a href="/events/show">
                    <h3 class="font-weight-bold text-info text-left">
                        Learn on Sydney
                    </h3>
                </a>
                <p class="card-text text-left text-muted">
                    Some quick example text to build on the card
                    title and make up the bulk of the card's content.
                </p>
                <div class="text-md-left pt-2 text-muted">
                    <span class="fa fa-map-marker mr-1">
                        Sydney, Australia
                    </span>
                    <span class="fa fa-euro mr-1">
                        15.0000
                    </span>
                    <span class="fa fa-calendar mr-1">
                        Nov 27, 2018
                    </span>
                </div>
                <div class="pt-3">
                    <button type="submit" class="btn btn-outline-info btn-block ">Join Now</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection