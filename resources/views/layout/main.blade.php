<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Treatment | Interview Test</title>
        @include('layout.partials.head')
    </head>
    <body class="d-flex flex-column h-100">
        @include('layout.partials.nav')
        @include('layout.partials.header')
        <div class="container">
        @yield('content')
        </div>
        @include('layout.partials.footer')
        @include('layout.partials.footer-scripts')
    </body>
</html>
