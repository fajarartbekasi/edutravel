<img class="media-object rounded-circle ml-5"
    src="{{Auth::user()->avatar ?? Avatar::create($thread->creator->name)->setFontSize(50)->toBase64()}}"
    height="80" width="80"
    >
<div class="text-left pt-3 ml-5 mr-5">
    <div class="justify-content-left">
        <h3 class="pb-2 mb-0 text-info font-weight-bold mr-3">
            <a href="{{ $thread->path() }}">
                {{ $thread->title }}
            </a>
            <span class="badge badge-info text-white">
               {{ $thread->channel->slug }}
            </span>
        </h3>
    </div>
    <p class="text-muted">
        {{ $thread->body }}
    </p>
    <div class="d-flex justify-content-left">
        <button class="btn btn-outline-secondary btn-sm mr-3">
            <span class="fa fa-user text-muted">
                <strong class="mr-3 ml-3">
                    {{ $thread->creator->name }}
                </strong>
            </span>
        </button>
        <button class="btn btn-outline-secondary btn-sm mr-3">
            <span class="fa fa-at text-muted">
                <strong class="mr-3 ml-3">{{ $thread->creator->email }}</strong>
            </span>
        </button>
        @include('contents.discussions.blade.show._button')
    </div>
</div>
