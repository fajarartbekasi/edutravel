@extends('layouts.app')

@section('content')

<div class="container py-4">
      
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

            @include('contents.discussions.blade._sidebarFilter')

            @include('contents.discussions.blade._sidebarChannel')            

        </div>
        <div class="col-md-8 order-md-1">
            @include('contents.discussions.blade._discussionHeader')
            <hr>
             @include('contents.discussions.blade._repliesBody')
        </div>
    
    </div>
</div>


@endsection