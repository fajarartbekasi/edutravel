@extends('layouts.app')

@section('content')

  @include('partials.info.profile')

      <div class="bg-white rounded shadow-sm">

        @include('partials.form.form')

        <!-- discussion -->
        <div class="discussion container">
          <div class="row">
            <div class="col-md-12">
      
              <div class="media my-3">
                <div class="media-left mr-3">
                  <a href="">
                      <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
                  </a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">
                      <a href="">
                         How i can install laravel in my phone
                      </a>
                    
                  </h5>
                  <div class="media-conversation-meta">
                      <div class="media-conversation-replies">
                          <a href="">
                                
                              
                          </a>
                         4 min &nbsp;
                          <span class="fa fa-comment"></span>
                          1 comment &nbsp;
                          <span class="fa fa-reply"></span>
                          1 Reply
                      </div>
                  </div>
                  Chaerul Fajar Subhi 
                  <p class="text-muted">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                  </p>
                </div>
              </div>
              <hr>
               <div class="media my-3">
                <div class="media-left mr-3">
                  <a href="">
                      <img class="media-object rounded-circle" width="50" src="{{ asset('img/avatars/user.png') }}">
                  </a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">
                      <a href="">
                         How i can install laravel in my phone
                      </a>
                    
                  </h5>
                  <div class="media-conversation-meta">
                      <div class="media-conversation-replies">
                          <a href="">
                                
                              
                          </a>
                          4 min &nbsp;
                          <span class="fa fa-comment"></span>
                          1 comment &nbsp;
                          <span class="fa fa-reply"></span>
                          1 Reply
                      </div>
                  </div>
                  Chaerul Fajar Subhi 
                  <p class="text-muted">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
         <!-- end discussion -->
      
      </div>

@endsection
