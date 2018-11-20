<header>
    <nav class="navbar navbar-expand-md fixed-top bg-white navbar-dark ">
        <a class="navbar-brand mr-auto mr-lg-0 text-muted" href="#">
            <strong>
                <img class="media-object rounded-circle" width="30" height="30" src="{{ asset('img/avatars/icon.svg') }}">
                EduTravels
            </strong>
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            @include('partials._menuNav')
        </div>
    </nav>
</header>
{{-- @include('partials._tabNav') --}}
