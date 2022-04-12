<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')

        <title>@yield('title')</title>
    </head>
    <body>

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </body>

</html>

