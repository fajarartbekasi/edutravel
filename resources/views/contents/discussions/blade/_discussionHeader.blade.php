<h1 class="font-weight-bold"> {{ $thread->title }}</h1>
<p>
    <strong class="text-muted">
        <span class="text-muted">Published {{ $thread->created_at->diffForHumans() }}</span>
        by <a href="">{{ $thread->creator->name }}</a>
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
&nbsp;
<a href="http://" class="text-muted" title="Is this conversation full of spam? Sheesh - people, right?">
    <span class="text-muted">
        <img class="media-object rounded-circle" width="30" height="30" src="{{ asset('img/avatars/iconpasta.svg') }}">
    </span>
</a>

<p class="text-muted ">
        
        
        {{ $thread->body }}

</p>