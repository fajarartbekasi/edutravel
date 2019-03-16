
<div class="user jumbotron jumbotron-fluid">
    <div class="d-flex justify-content-center">
        <img class="avatar rounded-circle"
            src="{{Auth::user()->avatar ?? Avatar::create($profileUser->name)->setFontSize(50)->toBase64()}}"
            height="120">
    </div>
    <div class="text-center">
        <p class="font-weight-bold pt-3 mb-2">{{ $profileUser->name }}.</p>
        <p class="font-weight-bold text-muted ">{{ $profileUser->email }} . Member since {{ $profileUser->created_at->diffForHumans() }}</p>
        {{-- <div class="d-block mt-3">
            <span class="fa fa-star text-muted"> {{ $profileUser->favorites_count }} {{ str_plural('Favorite', $profileUser->favorites_count) }}</span>
            <span class="fa fa-check-square text-muted"> 0 Lesson</span>
            <span class="fa fa-calendar text-muted"> {{ $profileUser->created_at->diffForHumans() }}</span>
        </div> --}}
    </div>
</div>
<div class="container">
    <ul class="nav nav-tabs" id="nav-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#first">
                <span class="fa fa-eye"></span>
                Overview</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" data-toggle="tab" href="#second">
                <span class="fa fa-heartbeat"></span>
                Activty</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" data-toggle="tab" href="#three">
                <span class="fa fa-question-circle"></span>
                Your Questions</a>
        </li>
    </ul>
    <div class="tab-content pt-5">
        <div class="tab-pane active" id="first">
            <div class="d-flex justify-content-center">
                <span class="fa fa-search fa-5x"> </span>
            </div>
            <div class="text-center pt-3">
                <p class="">Im, So sorry the data not found for a view momments.</p>
            </div>
        </div>
        <div class="tab-pane" id="second">
                @include('contents.blade.index.timeline')
        </div>
        <div class="tab-pane" id="three">
            <div class="d-flex justify-content-center">
                <span class="fa fa-search fa-5x"> </span>
            </div>
            <div class="text-center pt-3">
                <p class="">Im, So sorry the data not found for a view momments.</p>
            </div>
        </div>
    </div>
</div>