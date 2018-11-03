<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="">
        <title>{{ config('app.name', 'EduTravel') }}</title>
        <link href="{{ asset('css/_style.css') }}" rel="stylesheet">
        <style>
            [v-cloak]{
                display: none;
            }
        </style>
        <script>

            window.App = {!! json_encode([

                'csrfToken' => csrf_token(),

                'user'      => Auth::user(),
                
                'signedIn'  => Auth::check()


            ]) !!};

        </script>
    </head>
    <body class="bg-light">
        <div id="app">

            @include('partials.nav')

            <main role="main" class="container">

                @include('partials.notifications.errors')

                
                
                <div id="flash-msg">
                    
                </div>
                <flash message="{{ session('flash') }}"></flash>
                @yield('content')
            </main> 



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
