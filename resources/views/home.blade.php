@extends('layouts.app')

@section('content')

  @include('partials.info.profile')

      <div class="shadow p-3 mb-5 bg-white rounded ">

        @include('partials.form.form')

        <!-- discussion -->
        <div class="discussion container">
          <div class="row">
            <div class="col-md-12">
              @include('contents.discussions.index')
            </div>
          </div>
        </div>
         <!-- end discussion -->
      
      </div>

@endsection
