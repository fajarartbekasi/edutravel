@extends('layouts.app')

@section('content')
    <thread :initial-replies-count="{{ $thread->replies_count }}" inline-template>
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-12">
                    @include('contents.discussions.blade._discussionHeader')
                </div>
                <div class="col-md-12">
                    <replies @added="repliesCount++" @removed="repliesCount--"></replies>
                </div>
            </div>
        </div>
    </thread>
@endsection