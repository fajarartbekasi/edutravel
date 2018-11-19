<div class="float-right text-muted pt-3">
    @if(Auth::check())
        @can('update', $thread)
            <div class="float-right my-2 my-lg-0">
                <form action="{{ $thread->path() }}" method="post" >
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-outline-danger btn-sm mr-3">
                        <span class="fa fa-trash"> This is a Spam</span>
                    </button>
                </form>
            </div>
        @endcan
    @endif
    <subscribe-button :active="{{ json_encode($thread->isSubscribedTo) }}"></subscribe-button>

</div>