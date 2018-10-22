<nav class="navbar navbar-icon-top navbar-expand-lg fixed-top navbar-dark bg-white text-muted">

    <a class="navbar-brand mr-auto mr-lg-0 text-muted" href="#">
        <strong>
            <img class="media-object rounded-circle" width="30" height="30" src="{{ asset('img/avatars/icon.svg') }}">
            EduTravels
        </strong>
        
    </a>
    <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>

    @include('partials._menuNav')
   
</nav>

@include('partials._scroll')