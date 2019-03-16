<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.components.ui.head')
</head>

<body class="main">
    <div id="app">
        @include('layouts.components.ui.header')
        @include('partials.ui.part.pageheader')
        @include('partials.ui.part.scroll')

        <div class="container">
            <div class="row">
                @yield('leftmenu')
                <main class="col-md-8 mas" role="main">
                    <div id="flash-msg"></div>
                    @include('partials.notifications.errors')
                    <flash message="{{ session('flash') }}"></flash>
                    @yield('content')
                </main>
                    @yield('rightbutton')
            </div>
        </div>

    </div>
    @include('partials.footer')
    @include('layouts.components.script')
</body>

</html>