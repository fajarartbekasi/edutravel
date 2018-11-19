<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <div class="my-3 p-3 bg-transparant rounded shadow-sm">
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray font-italic">
                        {{ $thread->body }}
                    </p>
                </div>
                <div class="py-3 text-md-left">
                    <strong class="text-info font-weight-bold">
                        <strong class="text-muted">
                            Published {{ $thread->created_at->diffForHumans() }} by .
                        </strong>
                        <a href="{{ route('profile', $thread->creator) }}">
                            {{ $thread->creator->name }}
                        </a>
                    </strong>
                    <span class="fa fa-comment mr-3 float-right text-muted" v-text="repliesCount">
                        Comment
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>