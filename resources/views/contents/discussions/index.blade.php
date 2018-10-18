@extends('layouts.app')

@section('content')

  @include('partials.info.profile')

      <div class="shadow p-3 mb-5 bg-white rounded ">
        <!-- discussion -->
        <div class="discussion container">
          <div class="row">
            <div class="col-md-12">

                @include('contents.discussions._body')
 
            </div>
          </div>
        </div>
         <!-- end discussion -->
         @if(Auth()->check())
            @include('partials.form.form')
        @else
             <p class="text-center" > <a href="{{ route('login') }}">Please sign in</a>to participate in this discussion.</p>
        @endif

      </div>

@endsection
