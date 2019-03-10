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

                 <thread :initial-replies-count="{{ $thread->replies_count }}" inline-template>
                    • <span v-text="repliesCount">
                        comment
                      </span>
                    <replies @added="repliesCount++" @removed="repliesCount--"></replies>
                    </small>
                </thread>

            </div>
            <div class="pt-2 lead">
                <div>
                    <p>
                        {{ $thread->body }}
                    </p>
                </div>
            </div>
        </div>
        <div class="p-5">
            <div>
                <div>

                    <div id="comment-1">
                        <div class="media mb-3">
                            <div class="pr-2 mr-1">
                                <img src="https://secure.gravatar.com/avatar/9465c78eee69cad31814f188cd40901e?s=100&amp;d=identicon" alt="Chaerul Fajar Subhi"
                                    width="45" height="45" class="align-self-start mt-2 rounded-circle img-thumbnail bg-white border-white absolute">
                            </div>
                            <div class="media-body bg-light-header pl-3 pt-3 pr-3 ml-3 rounded-2 body-content">
                                <strong class="font-weight-bold pl-2 mr-5">laravel schedule:run is not working on server(via cron jobs)</strong>
                                <div class="float-right media ">
                                    <a href="http://staging.insthing.com/products/create" class="d-flex text-muted align-items-center text-icon" data-toggle="tooltip"
                                        data-placement="left" title="Add new product">
                                        <svg viewBox="0 0 2091 2091" xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="fill-current icon mr-2">
                                            <path d="M789.333 1152q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm384 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm384 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-512-512q-204 0-381.5 69.5t-282 187.5-104.5 255q0 112 71.5 213.5t201.5 175.5l87 50-27 96q-24 91-70 172 152-63 275-171l43-38 57 6q69 8 130 8 204 0 381.5-69.5t282-187.5 104.5-255-104.5-255-282-187.5-381.5-69.5zm896 512q0 174-120 321.5t-326 233-450 85.5q-70 0-145-8-198 175-460 242-49 14-114 22h-5q-15 0-27-10.5t-16-27.5v-1q-3-4-.5-12t2-10 4.5-9.5l6-9 7-8.5 8-9q7-8 31-34.5t34.5-38 31-39.5 32.5-51 27-59 26-76q-157-89-247.5-220t-90.5-281q0-130 71-248.5t191-204.5 286-136.5 348-50.5 348 50.5 286 136.5 191 204.5 71 248.5z"/>
                                        </svg>
                                    </a>
                                    <span class="mr-2 ">2</span>
                                    <a href="http://">
                                        <button type="button" class="btn btn-outline-light btn-sm">Laravel</button>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <small class="ml-2">
                                        <strong class="text-info">Chaerul Fajar Subhi</strong>
                                            Published
                                        <span>4 days ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-3">
                    <div>
                        <div class="media mb-3">
                            <div class="pr-2 mr-1">
                                <img src="{{ asset('img/avatars/user.png') }}"
                                     alt="Chaerul Fajar Subhi"
                                     width="45"
                                     height="45"
                                     class="align-self-start mt-2 rounded-circle img-thumbnail bg-white border-white absolute">
                            </div>
                            <div class="media-body bg-light-comment pl-3 pt-2 pr-3 ml-3 rounded-2">
                                <div class="ml-2 mt-2 mb-3 rounded-2 bg-white">
                                    <form class="p-3">
                                        <div class="form-group">
                                            <textarea id="body"
                                                      name="body"
                                                      placeholder="Leave a comment"
                                                      class="form-control pl-0 border-0"
                                                      style="resize: none; overflow: hidden; height: 61px;">
                                            </textarea>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-info mb-2">
                                            Comment
                                        </a>
                                        <a href="https://guides.github.com/features/mastering-markdown/#examples"
                                           target="_blank"
                                           data-toggle="tooltip"
                                           title=""
                                           class="float-right text-secondary"
                                           data-original-title="Markdown support">
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection