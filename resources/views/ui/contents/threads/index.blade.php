@extends('layouts.master')

@section('leftmenu')
    @include('partials.ui.part.left')
@endsection
@section('content')

        <article class="border rounded-1 bg-white body-content shadow-sm">
            <div class="p-5">
                <div>
                    <div>
                        @forelse($threads as $thread)
                            <div id="comment-1">
                                <div class="media mb-3">
                                    <div class="pr-2 mr-1">
                                        <a href="{{ route('profile', $thread->creator) }}">
                                            <img src="{{Auth::user()->avatar ?? Avatar::create($thread->creator->name)->setFontSize(50)->toBase64()}}"
                                                alt="{{ $thread->creator->name}}"
                                                width="45"
                                                height="45"
                                                class="align-self-start mt-2 rounded-circle img-thumbnail bg-white border-white absolute">
                                        </a>
                                    </div>
                                    <div class="media-body bg-light-header pl-3 pt-3 pr-3 ml-3 rounded-2 body-content">
                                        <a href="{{ $thread->path()}}">
                                            <strong class="font-weight-bold pl-2 mr-5 text-white">
                                                 {{ $thread->title }}
                                            </strong>
                                        </a>
                                        <div class="float-right media ">
                                            <svg viewBox="0 0 2091 2091" xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="fill-current icon mr-2">
                                                <path d="M789.333 1152q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm384 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm384 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-512-512q-204 0-381.5 69.5t-282 187.5-104.5 255q0 112 71.5 213.5t201.5 175.5l87 50-27 96q-24 91-70 172 152-63 275-171l43-38 57 6q69 8 130 8 204 0 381.5-69.5t282-187.5 104.5-255-104.5-255-282-187.5-381.5-69.5zm896 512q0 174-120 321.5t-326 233-450 85.5q-70 0-145-8-198 175-460 242-49 14-114 22h-5q-15 0-27-10.5t-16-27.5v-1q-3-4-.5-12t2-10 4.5-9.5l6-9 7-8.5 8-9q7-8 31-34.5t34.5-38 31-39.5 32.5-51 27-59 26-76q-157-89-247.5-220t-90.5-281q0-130 71-248.5t191-204.5 286-136.5 348-50.5 348 50.5 286 136.5 191 204.5 71 248.5z"/>
                                            </svg>
                                            <span class="mr-2 ">
                                                {{ $thread->replies_count }} {{ str_plural('comment', $thread->replies_count) }}
                                            </span>
                                            <a href="http://">
                                                <button type="button" class="btn btn-outline-light btn-sm">{{ $thread->channel->slug }}</button>
                                            </a>
                                        </div>

                                        <div class="mb-3" >
                                            <small class="ml-2">
                                                <a href="{{ route('profile', $thread->creator) }}">
                                                    <strong class="text-info">
                                                       {{ $thread->creator->name }}
                                                    </strong>
                                                </a>
                                                    Published
                                                <span>
                                                    {{ $thread->created_at->diffForHumans() }}
                                                </span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="d-flex flex-column align-items-center justify-content-center bottom-radius">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 60 60"
                                 class="fill-text-color"
                                 style="width: 200px;">
                                <path fill-rule="evenodd"
                                      d="M7 10h41a11 11 0 0 1 0 22h-8a3 3 0 0 0 0 6h6a6 6 0 1 1 0 12H10a4 4 0 1 1 0-8h2a2 2 0 1 0 0-4H7a5 5 0 0 1 0-10h3a3 3 0 0 0 0-6H7a6 6 0 1 1 0-12zm14 19a1 1 0 0 1-1-1 1 1 0 0 0-2 0 1 1 0 0 1-1 1 1 1 0 0 0 0 2 1 1 0 0 1 1 1 1 1 0 0 0 2 0 1 1 0 0 1 1-1 1 1 0 0 0 0-2zm-5.5-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm24 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm1 18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-14-3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm22-23a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM33 18a1 1 0 0 1-1-1v-1a1 1 0 0 0-2 0v1a1 1 0 0 1-1 1h-1a1 1 0 0 0 0 2h1a1 1 0 0 1 1 1v1a1 1 0 0 0 2 0v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 0-2h-1z">
                                </path>
                            </svg>

                            <span>We didn't find anything - just empty space.</span>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </article>

@endsection