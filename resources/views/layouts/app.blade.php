<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="{{ $bodyClass ?? '' }}">

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    @include('partials.whatsapp')

    @include('partials.modal')

    @include('partials.scripts')

</body>
</html>
