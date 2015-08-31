<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @yield('title', 'Leatherman')
        </title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- CSS Dependencies -->
        <link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('bower_components/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('bower_components/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ url('bower_components/icheck/skins/square/blue.css') }}">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('build/css/AdminLTE.min.css') }}">

    </head>
    <body class="hold-transition login-page">

        @yield('content')

        <!-- JS Dependencies -->
        <script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('bower_components/icheck/icheck.min.js') }}"></script>

        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass:  'icheckbox_square-blue',
                    radioClass:     'iradio_square-blue',
                    increaseArea:   '20%'
                });
            });
        </script>

    </body>
</html>