<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.components.ui.head')
</head>

<body>
    <div id="app">
        @include('layouts.components.ui.header')
        @include('partials.ui.part.pageheader')
        @include('partials.ui.part.scroll')
        <div class="container">
            <div class="row mt-5">
                @yield('leftmenu')
                <main class="col-md-9" role="main">
                    @yield('content')
                </main>
                    @yield('rightbutton')
            </div>
        </div>

    </div>
    @include('layouts.components.script')
</body>

</html>