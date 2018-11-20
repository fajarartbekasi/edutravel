@extends('layouts.app')

@section('content')
    <div class="user jumbotron jumbotron-fluid">
        <div class="d-flex justify-content-left ml-5 mb-5">
            @include('contents.discussions.blade.show._info')
        </div>
    </div>
    <thread :initial-replies-count="{{ $thread->replies_count }}" inline-template>
        <div class="container">
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item border-0">
                    <a class="nav-link shadow border-0 active " data-toggle="tab" href="#first">
                        <span class="fa fa-comment mr-2">
                            <span class="ml-2" v-text="repliesCount"></span>
                        </span>
                        Total comment
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="first">
                    <div class="comments">
                        <replies @added="repliesCount++" @removed="repliesCount--"></replies>
                    </div>
                </div>
            </div>
        </div>
    </thread>
@endsection