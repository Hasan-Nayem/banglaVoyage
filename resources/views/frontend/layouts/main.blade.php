<!DOCTYPE html>
<html>

<head>
    @include('frontend.components.header')
    @include('frontend.components.css')
</head>

<body>
    @include('frontend.components.navbar')

    @yield('content')

    @include('frontend.components.footer')
    @include('frontend.components.scripts')
</body>

</html>
