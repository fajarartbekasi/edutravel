@extends('layouts.app')

@section('content')

    <thread :initial-replies-count="{{ $thread->replies_count }}" inline-template>
        
        <div class="row">

            <div class="col-md-12">
                @include('contents.discussions.blade._discussionHeader')

            </div>
            <div class="col-md-12">

                <replies @added="repliesCount++" @removed="repliesCount--"></replies>
                
            </div>
            
        </div>

       
    </thread>


@endsection