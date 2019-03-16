<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.components.head')
    </head>
    <body>
        <div id="app">
            <main role="main">
                @yield('content')
            </main>
                @include('partials.footer')
        </div>
                @include('layouts.components._script')
    </body>
</html>
