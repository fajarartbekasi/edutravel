<div class="tab-pane active" id="one">
    <ul class="list-group">
        @forelse ($channels as $channel)
            <li class="list-group-item text-white border-0">
                <a href="/threads/{{ $channel->slug }}" class="text-white mr-2">
                    {{ $channel->name }}
                </a>
            </li>
        @empty
            <li class="list-group-item tex-muted border-0">
                No channel in here
            </li>
        @endforelse
    </ul>

</div>