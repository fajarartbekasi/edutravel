@extends('layouts.app')

@section('content')
  <div class="container p-3">
    @include('contents.discussions.blade.index._breadcrumb')
    <div class="row">
      <div class="col-md-9">
        @include('contents.discussions._body')
      </div>
      <div class="col-md-3 ">
        <div class="box shadow">
          <div class="card">
            <div class="card-body">
              @include('contents.discussions.blade.index._button')
              <div class="card-body">
                  @include('contents.discussions.blade.index._tabHeader')
                <div class="tab-content bg-transparant">
                  @include('contents.discussions.blade.index._channelBody')
                  @include('contents.discussions.blade.index._filterBody')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
  </div>
@endsection
