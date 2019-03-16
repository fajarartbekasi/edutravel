<nav class="col-md-1 d-none d-md-block sidebar pt-5">
    <div class="sidebar-sticky">
        <ul class="nav flex-column nav-sidebar">
            <li class="nav-item">
                <a class="nav-link btnThread shadow-sm" href="/" title="Add New Thread">
                    <span class="fa fa-plus"></span>
                </a>
            </li>
            <li class="nav-item pt-2">
                <subscribe-button :active="{{ json_encode($thread->isSubscribedTo) }}"></subscribe-button>
            </li>
        </ul>
    </div>
</nav>