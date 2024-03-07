<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title')</title>

    @include('includes.style')

    @stack('after-style')
    
    
</head>
<body>
    @include('includes.navbar')
    @yield('content')
    @stack('before-script')

    @include('includes.script')

    @stack('after-script')
</body>
</html>