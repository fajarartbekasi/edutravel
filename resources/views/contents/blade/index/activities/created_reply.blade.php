
@component('contents.blade.index.activities.activity')

    @slot('heading')
        <div class="user-detail">
            <h5 class="handel text-info">

                {{ $profileUser->name }}
            </h5>
            <div class="post-meta">
                <div class="asker-meta">
                    <span class="qa-message-what"></span>
                    <span class="qa-message-who">
                        <span class="qa-message-who-pad text-muted">left a reply on</span>
                        <span class="qa-message-who-data">
                            <a href="{{ $activity->subject->thread->path() }}">
                                <strong class="font-weight-bold">
                                {{ $activity->subject->thread->title }}
                                </strong>
                            </a>
                        </span>
                    </span>
                    <span class="qa-message-when text-muted">
                        <span class="qa-message-when-data">{{$date}}</span>
                    </span>
                </div>
            </div>
        </div>
    @endslot

    @slot('body')
        <div class="qa-message-content text-dark">
            {{ $activity->subject->body }}.
        </div>
    @endslot

@endcomponent