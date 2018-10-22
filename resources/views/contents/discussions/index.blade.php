@extends('layouts.app')

@section('content')


      <div class="shadow p-3 mb-5 bg-white rounded ">
        <!-- discussion -->
        <div class="discussion container">
          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">

                @include('contents.discussions.blade._sidebarFilter')

                @include('contents.discussions.blade._sidebarChannel')            

            </div>
            <div class="col-md-8 order-md-1">

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
