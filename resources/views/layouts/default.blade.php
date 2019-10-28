<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>

    <div class="container">
        @include('includes.navbar')

        <div id="main">
            @yield('content')
        </div>
    </div>

    <div class="footer">
        @include('includes.footer')
    </div>
    
</body>
</html>