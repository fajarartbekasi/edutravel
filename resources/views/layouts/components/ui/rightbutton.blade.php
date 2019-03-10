<nav class="col-md-1 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column nav-sidebar">
            <li class="nav-item">
                <a class="nav-link btnThread shadow-sm" href="/" title="Add New Thread">
                    <span class="fa fa-plus"></span>
                </a>
            </li>
            @section('subscribe')
                @include('layouts.components.ui.subscribe')
            @endsection
        </ul>
    </div>
</nav>