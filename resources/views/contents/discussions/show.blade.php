@extends('layouts.app')

@section('content')

    <thread :initial-replies-count="{{ $thread->replies_count }}" inline-template>
        <div class="container py-4">
            
            <div class="row">

                <div class="col-md-3 float-left">

                    

                    @include('contents.discussions.blade._sidebarChannel')            

                </div>

                <div class="col-md-9 order-md-1">

                    @include('contents.discussions.blade._discussionHeader')

                    <hr>

                    <replies @added="repliesCount++" @removed="repliesCount--"></replies>

                    
                </div>
            
            </div>

        </div>
    </thread>


@endsection