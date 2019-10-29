<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>

    <div class="container">
        @include('includes.header')

        <div id="main">
            @yield('content')
        </div>
    </div>

    @include('includes.footer')
    
</body>
</html>