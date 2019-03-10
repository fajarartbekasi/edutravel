
<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column nav-sidebar">
            <li class="nav-item">
                <a class="nav-link btnThread shadow-sm" href="/threads/create">
                    <span class="fa fa-file"></span>
                    Threads
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-2 text-muted pt-3">
            <a href="/threads" class="d-flex align-items-center text-icon " data-toggle="tooltip" data-placement="left"
                title="Show All Threads">
                <span class="text-muted">All Threads</span>
            </a>
        </h6>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-2 text-muted pt-3">
            <a href="/threads?popular=1" class="d-flex align-items-center text-icon" data-toggle="tooltip" data-placement="left"
                title="Popular Threads">
                <span class="text-muted">Populer</span>
            </a>
        </h6>
        @if(Auth::check())
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-2 text-muted pt-3">
                <a href="/threads?by={{ auth()->user()->name }}" class="d-flex align-items-center text-icon" data-toggle="tooltip" data-placement="left"
                   title="My Question Is">
                   <span class="text-muted">Your Threads Here</span>
                </a>
            </h6>
        @endif
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-2 text-muted pt-3">
            <a href="/threads?unanswered=1" class="d-flex align-items-center text-icon" data-toggle="tooltip" data-placement="left"
                title="Add new product">
                <span class="text-muted">Unswared</span>
            </a>
        </h6>
        <ul class="nav flex-column nav-sidebar">
        </ul>
    </div>
</nav>