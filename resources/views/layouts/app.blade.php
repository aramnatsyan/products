<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products - Categories App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <header>
            @include('layouts.menu')
        </header>

        <section>
            <main id="content">
                @include('flash-messages')

                @yield('content')
            </main>
        </section>

        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.js@1.12.9/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap@4.0.0/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
