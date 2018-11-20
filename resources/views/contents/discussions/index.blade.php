@extends('layouts.app')

@section('content')
  @include('contents.discussions.blade.index._header')
  <div class="container">
    <ul class="nav nav-tabs" id="nav-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link shadow active" data-toggle="tab" href="#first">
                <span class="fa fa-home"></span>
                Forum
            </a>
        </li>
    </ul>
    <div class="row pt-5">
      <div class="col-md-2">
          @include('contents.discussions.blade.index._button')
          @include('contents.discussions.blade.index._filterBody')
      </div>
      <div class="col-md-8">
        @include('contents.discussions._body')
      </div>
      <div class="col-md-2 ">
        @include('contents.discussions.blade.index._channelBody')
      </div>
   </div>
  </div>
@endsection
