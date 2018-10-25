<h1 class="font-weight-bold"> {{ $thread->title }}</h1>
@can('update', $thread)
    <form action="{{ $thread->path() }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-outline-danger btn-sm float-right">
            <span class="fa fa-trash"> This is a Spam</span>
        </button>
    </form>
@endcan
<p>
    <strong class="text-muted">
        <span class="text-muted">Published {{ $thread->created_at->diffForHumans() }}</span>
        by <a href="{{ route('profile', $thread->creator) }}">{{ $thread->creator->name }}</a>
    </strong>
    
</p>

<a href="http://" class="text-muted" title="Edit Your Discussion">
    <span class="fa fa-pencil "></span>
</a>
&nbsp;
<a href="http://" class="text-muted" title="Want an email each time this thread receives a new reply?">
    <span class="fa fa-envelope "></span>
</a>
&nbsp;
<a href="http://" class="text-muted" title="Want to favorite this conversation ?">
    <span class="fa fa-star"></span>
</a>



<p class="text-muted ">
        
        
        {{ $thread->body }}

</p>