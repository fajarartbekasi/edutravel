
<ul class="list-group pt-3">
        <h4 > Channels </h4>
    @forelse ($channels as $channel)
        <li class="list-group-item text-muted border-0">
            <a href="/threads/{{ $channel->slug }}" class="text-muted mr-2">
                {{ $channel->name }}
            </a>
        </li>
    @empty
        <li class="list-group-item tex-muted border-0">
            No channel in here
        </li>
    @endforelse
</ul>
