<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medlink - @yield('title')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @stack('styles')
    </head>
    <body>
        @component('components.sidebar.sidebar')
        @endcomponent
        
        <div class="wrapper">
            <div class="wrapper__content">
                @yield('content')
            </div>
        </div>
        @component('components.footer.footer')
        @endcomponent

        @stack('scripts')

    </body>
</html>
