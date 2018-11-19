<div class="container pt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="my-3 p-3 card bg-transparant rounded-4 shadow-sm" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('/img/318585.png') }}"  alt="Card image cap">
                <h5 class="text-center card-title font-weight-bold py-3">{{ $profileUser->name }}</h5>
                <p class="text-center text-muted font-italic ">@fajarartbekasi</p>
                <h2 class="text-center font-weight-bold">830</h2>
                <p class="text-center font-italic text-muted">Experience</p>
                <button type="submit" class="btn btn-outline-info">Update Profile</button>
                <div class="d-block mt-3">
                    <span class="fa fa-star text-muted"> {{ $profileUser->favorites_count }} {{ str_plural('Favorite', $profileUser->favorites_count) }}</span>
                    <span class="fa fa-check-square text-muted"> 0 Lesson</span>
                    <span class="fa fa-calendar text-muted"> {{ $profileUser->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-8 pt-3">
            <h4 class="border-bottom text-muted ">Your Activity</h4>
            <div class="my-3 p-3 card bg-transparant rounded-4 shadow-sm">
                 @include('contents.blade.index.timeline')
            </div>
        </div>

    </div>
</div>
