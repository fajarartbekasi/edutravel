<div class="col-md-4 pt-3">
    <div class=" d-flex justify-content-center">
        <img class="rounded-circle"
             height="50"
             width="50"
             src="{{ asset('img/318585.png') }}"
         >
    </div>
    <h1 class="text-muted text-center pt-2">
        {{ $thread->creator->name }}
    </h1>
    @include('contents.discussions.blade.show._button')
</div>