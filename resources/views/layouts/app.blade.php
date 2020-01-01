<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ trans('setting.title') }}</title>

    <!-- CSS And JavaScript -->
    <link href="{{ asset('bower_components/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Navbar Contents -->
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    {{-- JS --}}
    <script href="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script href="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script href="{{ asset('bower_components/popper.js/dist/umd/popper.js') }}"></script>
</body>

</html>
