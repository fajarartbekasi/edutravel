@component('contents.blade.index.activities.activity')
    @slot('heading')
        <div class="user-detail">
            <a href="{{ $activity->subject->favorited->path() }}">
                <h5 class="handel text-info">
                    {{ $profileUser->name }}
                </h5>
            </a>
            <div class="post-meta">
                <div class="asker-meta">
                    <span class="qa-message-what"></span>
                    <span class="qa-message-who">
                        <span class="qa-message-who-pad text-muted">Favorite reply</span>

                    </span>
                    <span class="qa-message-when text-muted">
                        <span class="qa-message-when-data">{{$date}}</span>
                    </span>
                </div>
            </div>
        </div>
    @endslot

    @slot('body')
        <div class="qa-message-content text-muted">
            {{ $activity->subject->favorited->body }}.
        </div>
    @endslot

@endcomponent