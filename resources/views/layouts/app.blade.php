<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="">
        <title>{{ config('app.name', 'EduTravel') }}</title>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="forum-discussion signedIn">
        <div id="app">

            @include('partials.nav')

            <div class="container">

                @include('partials.notifications.errors')

                
                
                <div id="flash-msg">
                    
                </div>
                <flash message="{{ session('flash') }}"></flash>
                @yield('content')

            </div>

            @include('partials.footer')
        </div>

        <script src="{{ asset('js/app.js') }}" ></script>

        <script>
            $(function () { 
                'use strict' 
                $('[data-toggle="offcanvas"]').on('click', function () { 
                    $('.offcanvas-collapse').toggleClass('open')
                }) 
            })
        </script>

        <script>
            $(function () {
                // flash auto hide
                $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(3000).slideUp(500);
            })
        </script>

    </body>

</html>
