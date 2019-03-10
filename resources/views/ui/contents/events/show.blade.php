@extends('layouts.master')

@section('content')
<div class="row ">
    <div class="col-md-12 d-flex justify-content-center">
        <div class="media text-muted pt-3 ">
            <img src="{{ asset('img/avatars/user.png') }}" alt="Chaerul Fajar Subhi"
                width="45" height="45" class="bd-placeholder-img mr-2 rounded-circle img-thumbnail bg-white border-white">
            <p class="media-body pb-3 mb-0 small ">
                <strong class="d-block text-gray-dark">Axelvelujon - Nara Park</strong>
                <small class="text-muted">3 hours ago</small>
            </p>
        </div>
    </div>
    <div class="col-md-12 d-flex justify-content-center offset-md-2">
        <div class="card" style="width: 30rem;">
            <img src="{{ asset('img/footbridge.jpg') }}" class="card-img-top"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-primary">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20">
                        <path d="M288 112c22.223 0 39.997-17.776 39.997-40 0-22.225-17.774-40-39.997-40s-40.003 17.775-40.003 40c0 22.224 17.78 40 40.003 40zM288 232h104v-40h-72l-44.802-69.333c-7.698-11.667-18.136-18.136-30.933-18.136-3.198 0-8.828.531-12.799 1.747L120 144v112h40v-80l40.531-16L120 480h40l56.698-164.271L267 384v96h38V352l-57.031-96 19.745-61.864L288 232z"/>
                    </svg>
                </a>
                <a href="#" class="btn btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20">
                        <path d="M256 288c-45.443 0-83.675 26.076-102.205 64h204.41c-18.53-37.924-56.762-64-102.205-64z"/>
                        <path d="M256 48C140.563 48 48 141.6 48 256s92.563 208 208 208 208-93.6 208-208S370.401 48 256 48zm0 374.4c-91.518 0-166.404-74.883-166.404-166.4 0-91.518 74.887-166.4 166.404-166.4S422.404 164.482 422.404 256 347.518 422.4 256 422.4z"/>
                        <path d="M328.8 235.2c17.683 0 31.201-13.518 31.201-31.2s-13.519-31.2-31.201-31.2c-17.682 0-31.2 13.518-31.2 31.2s13.518 31.2 31.2 31.2zM183.2 235.2c17.682 0 31.2-13.518 31.2-31.2s-13.519-31.2-31.2-31.2c-17.683 0-31.201 13.518-31.201 31.2s13.519 31.2 31.201 31.2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12 d-flex justify-content-center">
        <div class="media pt-3 mb-3 text-muted">
            <span class="fa fa-heart fa-2x mr-5"></span>
            <span class="fa fa-comments fa-2x mr-5"></span>
            <span class="fa fa-reply  fa-2x"></span>
        </div>

    </div>
    <div class="col-md-12">
        <div class="media d-flex justify-content-center offset-md-1">
            <img src="{{ asset('img/avatars/user.png') }}" alt="Chaerul Fajar Subhi"
                width="30" height="30" class="bd-placeholder-img mr-2 rounded-circle img-thumbnail bg-white border-white">
            <strong class="d-block text-gray-dark">Like by
              <strong class="text-info">OliverThomas</strong> and others
            </strong>
        </div>
    </div>
    <div class="col-md-12">
        <div class="media d-flex justify-content-center offset-md-1">
            <strong class="d-block text-gray-dark mr-3">OliverThomas
                  <strong class="text-muted ml-3">Hahaha..., funny</strong>
            </strong>
        </div>
    </div>
    <div class="col-md-8 offset-md-4 ">

        <div class="pt-5">
            <div>
                <div class="media mb-3">
                    <div class="pr-2 mr-1">
                        <img src="{{ asset('img/avatars/user.png') }}" alt="Chaerul Fajar Subhi"
                            width="35" height="35" class="align-self-start mt-2 rounded-circle img-thumbnail bg-white border-white absolute">
                    </div>
                    <div class="media-body bg-light-comment pl-3 pt-2 pr-3 ml-3 rounded-2">
                        <div class="ml-2 mt-3 mb-3 rounded-2 bg-white">
                            <form class="p-3">
                                <div class="form-group">
                                    <textarea name="" id="" placeholder="Leave a comment" class="form-control pl-0 border-0" style="resize:none; overflow:hidden; height:61px;">
                                            </textarea>
                                </div>
                                <a href="http://" class="btn btn-sm btn-info mb-2">
                                    Comment
                                </a>
                                <a href="" target="_blank" data-toggle="tooltip" title=""
                                    class="float-right text-secondary" data-original-title="Markdown support">
                                 </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection