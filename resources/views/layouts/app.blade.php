<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.components.head')
    </head>
    <body class="main">
        <div id="app">
                @include('partials.nav')
            <main role="main" class="main">
                <div id="flash-msg">
                </div>
                <flash message="{{ session('flash') }}"></flash>
                <div class="pt-5">
                    @include('partials.notifications.errors')
                </div>
                @yield('content')
            </main>
                @include('partials.footer')
        </div>
                @include('layouts.components.script')
    </body>
</html>
