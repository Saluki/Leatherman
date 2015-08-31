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
        <link rel="stylesheet" href="{{ url('build/css/skins/skin-blue-light.min.css') }}">

    </head>
    <body class="hold-transition skin-blue-light layout-boxed sidebar-mini">

        <div class="wrapper">

            <header class="main-header">

                <a href="{{ url('app') }}" class="logo">
                    <span class="logo-lg"><b>Leatherman</b></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <span class="label label-warning">3</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Tu as 3 tâches</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">Voir toutes les tâches</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ url('build/img/default_user.png') }}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ url('build/img/default_user.png') }}" class="img-circle" alt="User Image">
                                        <p>
                                            {{ Auth::user()->name }}
                                            <small>Inscrit depuis {{ Auth::user()->created_at }}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                       <!-- <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Préférences</a>
                                        </div>-->
                                        <div class="pull-right">
                                            <a href="{{ url('app/logout') }}" class="btn btn-default btn-flat">Deconnection</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">
                <section class="sidebar">

                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher...">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                              </span>
                        </div>
                    </form>

                    <ul class="sidebar-menu">

                        <li class="header">COMPOSANTS</li>
                        <li>
                            <a href="{{ url('app') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('app') }}">
                                <i class="fa fa-users"></i> <span>Scouts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('app') }}">
                                <i class="fa fa-calendar"></i> <span>Calendrier</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('app') }}">
                                <i class="fa fa-book"></i> <span>Documents</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('app') }}">
                                <i class="fa fa-bank"></i> <span>Finances</span>
                            </a>
                        </li>

                        <li class="header">TACHES</li>
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>A faire</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>En cours</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Terminé</span></a></li>

                    </ul>
                </section>
            </aside>

            <div class="content-wrapper">

                @yield('content')

            </div>

        </div>
        <!-- Wrapper end -->

        <!-- JS Dependencies -->
        <script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('bower_components/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- AdminLTE -->
        <script src="{{ url('build/js/app.min.js') }}"></script>

    </body>
</html>