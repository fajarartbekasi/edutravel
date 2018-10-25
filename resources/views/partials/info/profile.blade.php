<div class="user jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 text-center">
                <img class="avatar rounded-circle" src="{{ asset('img/avatars/user.png') }}">

            </div>
            <div class="media-content py-4 col-sm-10 ">
                
                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="header text-muted">
                            <div class="float-left">

                                <h3 class="font-weight-bold">
                                    {{ $profileUser->name }}
                                </h3> 
                            </div>
                            <div class="float-right text-right">
                                <H3>Experience</H3>
                                <H2 class="font-weight-bold">830</H2>
                                <H5 class="font-weight-bold">0 BEST REPLY AWARDS</H5>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="collapse mt-3" id="services">
                <form action="/scheduling/physical-appointment" method="POST" class="form-inline">
                    <div class="form-group mr-1">
                        <input type="text" name="" id="" class="form-control" placeholder="Service name....">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-danger" type="submit">Add Services</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <p class="text-muted text-center">
                    {{ $profileUser->created_at->diffForHumans() }}
                </p>
            </div>
            <div class="col-md-3">
                <p class="text-muted text-center">
                    0 Lessons Completed
                </p>
            </div>
            <div class="col-md-3">
                <p class="text-muted text-center">
                    {{ $profileUser->favorites_count }} {{ str_plural('Favorite', $profileUser->favorites_count) }}
                </p>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-outline-info btn-sm  btn-block">Edit Profile</button>
            </div>
        </div>
        
        @include('contents.blade.index.timeline')
        
    </div>
</div>

