<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Env Boss</title>

    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    @yield('head')
</head>
<body class="@yield('body.class')">
    @yield('body')

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    @yield('scripts')
</body>
</html>