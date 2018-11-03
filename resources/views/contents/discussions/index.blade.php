@extends('layouts.app')

@section('content')
          <div class="row">
            
            <div class="col-md-9">

              @include('contents.discussions._body')
            </div>
            <div class="col-md-3 py-3">
              <a href="threads/create">
                <button type="submit" class="btn btn-outline-info btn-block">
                  <span class="fa fa-comment-o mr-3">
                    New Thread
                  </span>
                </button>
              </a>
              
            </div>
          </div>
@endsection
