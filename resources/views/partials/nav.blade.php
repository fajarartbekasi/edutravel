
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-white">

    <a class="navbar-brand mr-auto mr-lg-0 text-muted" href="#">
        <strong>
            <img class="media-object rounded-circle" width="30" height="30" src="{{ asset('img/avatars/icon.svg') }}">
            EduTravels
        </strong>
        
    </a>
    
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        @include('partials._menuNav')
    </div>
</nav>
@include('partials._tabNav')