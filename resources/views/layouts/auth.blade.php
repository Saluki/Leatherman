<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <title>
            @yield('title', 'Leatherman')
        </title>

        <!-- CSS Dependencies -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    </head>
    <body>

        @yield('content')

        <!-- JS Dependencies -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>
</html>