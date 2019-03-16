@extends('layouts.master')

@section('leftmenu')
    @include('partials.ui.part.left')
@endsection

@section('rightbutton')
    @include('layouts.components.ui.rightbutton')
@endsection

@section('content')
    <article class="border rounded-1 bg-white body-content shadow-sm">
        <div class="pl-5 pt-5 pr-5 pb-2">
            <h2 class="mb-0">{{ $thread->title }}</h2>
            <div class="mt-0 mb-2">
                <small class="text-muted mt-0 pt-0">
                <a href="" class="text-muted">
                    <strong class="text-info">{{ $thread->creator->name }}</strong> •
                </a>
                Published {{ $thread->created_at->diffForHumans() }}
                • <span class="text-danger">{{ $thread->channel->slug }}</span>
            </div>
            <div class="pt-2 lead">
                <div>
                    <p>
                        {{ $thread->body }}
                    </p>
                </div>
            </div>
        </div>

        <thread :initial-replies-count="{{ $thread->replies_count }}" inline-template>

            <div class="container">
                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                    <li class="nav-item border-0">
                        <a class="nav-link bg-white active text-muted " data-toggle="tab" href="#first">
                            <span class="fa fa-comment mr-2">
                                <span class="ml-2" v-text="repliesCount"></span>
                            </span>
                            For your comment now
                        </a>
                    </li>
                </ul>
                <div class="pt-5">
                    <div>
                        <replies @added="repliesCount++" @removed="repliesCount--"></replies>
                    </div>
                </div>
            </div>
        </thread>
    </article>
@endsection