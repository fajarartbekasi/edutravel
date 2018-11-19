<div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="{{ $thread->path() }}">
        <h3 class="pb-2 mb-0 text-info font-weight-bold mr-3">{{ $thread->title }}</h3>
    </a>
    <span class="badge badge-info">
            {{ $thread->channel->slug }}
    </span>
</div>