@foreach($threads as $thread)
<div class="p-3 mb-5 rounded ">
    <div class="card shadow">
        <div class="card-body">
            <span class="fa fa-comment mr-3 float-right text-muted">
                {{ $thread->replies_count }} {{ str_plural('comment',$thread->replies_count) }}
            </span>
            <a href="{{ $thread->path() }}">
                <h3 class="pb-2 mb-0 text-info font-weight-bold">{{ $thread->title }}</h3>
            </a>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray font-italic text-white">
                {{ $thread->body }}
                </p>
            </div>
            <div class="py-3 text-md-left">
                <img class="media-object rounded-circle" width="30" height="30" src="{{ asset('img/avatars/user.png') }}">
                <strong class="font-weight-bold">
                    <a href="{{ route('profile', $thread->creator) }}" class="text-primary ext-muted">
                        {{ $thread->creator->name }}
                    </a>
                </strong>
                <strong class="text-muted">
                    Published {{ $thread->created_at->diffForHumans() }} by .
                </strong>
                <span class="badge badge-pill badge-info text-white">
                    {{ $thread->channel->slug }}
                </span>
            </div>
        </div>
    </div>
</div>

@endforeach
