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

            ])
        !!};
    </script>