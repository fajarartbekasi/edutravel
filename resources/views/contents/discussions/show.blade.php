@extends('layouts.app')

@section('content')

<div class="container py-4">
      
    <div class="row">
        <div class="col-md-3 float-left">

            @include('contents.discussions.blade._sidebarFilter')

            @include('contents.discussions.blade._sidebarChannel')            

        </div>
        <div class="col-md-9 order-md-1">
            @include('contents.discussions.blade._discussionHeader')
            <hr>
             @include('contents.discussions.blade._repliesBody')
        </div>
    
    </div>
</div>


@endsection