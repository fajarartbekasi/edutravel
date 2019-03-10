@extends('layouts.master')

@section('content')


<div class="my-3 p-3 bg-white rounded shadow offset-md-4">
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="event-grid">
                            <div class="event-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-check"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-remove"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Comming Soon</a>
                            </div>
                            <div class="event-content">
                                <h3 class="title"><a href="#">Laracon session #1 - Lyon</a></h3>
                                {{--
                                <div class="price">$10.00 - $12.00</div> --}}
                                <div class="price">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <strong class="mr-1">
                                                <span class="fa fa-map-marker"></span>
                                                <small>
                                                    Jakarta
                                                </small>
                                            </strong>
                                            <strong class="ml-1 mr-1">
                                                <span class="fa fa-calendar"></span>
                                                <small>
                                                    Feb 20, 2019
                                                </small>
                                            </strong>
                                            <strong>
                                                <span class="fa fa-dollar"></span>
                                                <small>
                                                    150.000
                                                </small>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-grid">
                            <div class="event-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-check"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-remove"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                            </div>
                            <div class="event-content">
                                <h3 class="title"><a href="#">Laracon session #1 - Lyon</a></h3>
                                {{--
                                <div class="price">$10.00 - $12.00</div> --}}
                                <div class="price">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <strong class="mr-1">
                                                <span class="fa fa-map-marker"></span>
                                                <small>
                                                    Jakarta
                                                </small>
                                            </strong>
                                            <strong class="ml-1 mr-1">
                                                <span class="fa fa-calendar"></span>
                                                <small>
                                                    Feb 20, 2019
                                                </small>
                                            </strong>
                                            <strong>
                                                <span class="fa fa-dollar"></span>
                                                <small>
                                                    150.000
                                                </small>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-grid">
                            <div class="event-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-check"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-remove"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                            </div>
                            <div class="event-content">
                                <h3 class="title"><a href="#">Sydney February Meetup</a></h3>
                                <div class="price">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <strong class="mr-1">
                                                <span class="fa fa-map-marker"></span>
                                                <small>
                                                    Jakarta
                                                </small>
                                            </strong>
                                            <strong class="ml-1 mr-1">
                                                <span class="fa fa-calendar"></span>
                                                <small>
                                                    Feb 20, 2019
                                                </small>
                                            </strong>
                                            <strong>
                                                <span class="fa fa-dollar"></span>
                                                <small>
                                                    150.000
                                                </small>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-grid">
                            <div class="event-image">
                                <a href="#">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-5.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-check"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-remove"></i></a></li>
                                </ul>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                            </div>
                            <div class="event-content">
                                <h3 class="title"><a href="#">Sydney February Meetup</a></h3>
                                <div class="price">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <strong class="mr-1">
                                                <span class="fa fa-map-marker"></span>
                                                <small>
                                                    Jakarta
                                                </small>
                                            </strong>
                                            <strong class="ml-1 mr-1">
                                                <span class="fa fa-calendar"></span>
                                                <small>
                                                    Feb 20, 2019
                                                </small>
                                            </strong>
                                            <strong>
                                                <span class="fa fa-dollar"></span>
                                                <small>
                                                    150.000
                                                </small>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>


@endsection
