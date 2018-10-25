<div class="row">
    <div class="col-md-12">
        <div class="main-timeline2">
            @foreach($threads as $thread)
                <div class="timeline">
                    <span class="icon fa fa-calendar"></span>
                    <a href="#" class="timeline-content">
                        <strong class="font-weight-bold">
                            {{ $thread->creator->name }} Posted: {{ $thread->title }} • {{ $thread->created_at->diffForhumans() }}
                        </strong>
                        <p class="description">
                            {{ $thread->body }}
                        </p>
                    </a>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
{{ $threads->links() }}