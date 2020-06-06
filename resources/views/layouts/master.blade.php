<!doctype html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <meta name="description" content="Dashboard UI Kit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/main.min3661.css?v=2.0">
</head>

<body class="o-page">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <div class="o-page__sidebar js-page-sidebar">
        <div class="c-sidebar">
            <a class="c-sidebar__brand" href="#">
                <img class="c-sidebar__brand-img" src="/img/logo.png" alt="Logo"> Dashboard
            </a>

            <h4 class="c-sidebar__title">Dashboards</h4>
            <ul class="c-sidebar__list">

                <li class="c-sidebar__item">
                    <a class="c-sidebar__link is-active" href="home-overview.html">
                        <i class="fa fa-home u-mr-xsmall"></i>Overview
                    </a>
                </li>

            </ul>
            <h4 class="c-sidebar__title">Account</h4>
            <ul class="c-sidebar__list">
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link"  href="/dashboard/users">
                        <i class="fa fa-users u-mr-xsmall"></i>Users
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="/dashboard/agents">
                        <i class="fa fa-users u-mr-xsmall"></i>Agents
                    </a>
                </li>
            </ul>

            <h4 class="c-sidebar__title">Discos</h4>
            <ul class="c-sidebar__list">
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link"  href="boards.html">
                        <i class="fa fa-list u-mr-xsmall"></i>All Discos
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="calendar.html">
                        <i class="fa fa-plus u-mr-xsmall"></i>New Discos
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="calendar.html">
                        <i class="fa fa-edit u-mr-xsmall"></i>Manage Discos
                    </a>
                </li>
            </ul>

            <h4 class="c-sidebar__title">Transaction</h4>
            <ul class="c-sidebar__list">
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link"  href="boards.html">
                        <i class="fa fa-list u-mr-xsmall"></i>Income
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link"  href="boards.html">
                        <i class="fa fa-list u-mr-xsmall"></i>History
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="calendar.html">
                        <i class="fa fa-list u-mr-xsmall"></i>Deposits
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="calendar.html">
                        <i class="fa fa-list u-mr-xsmall"></i>Withdraw
                    </a>
                </li>
            </ul>

            <h4 class="c-sidebar__title">Settings</h4>
            <ul class="c-sidebar__list">
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="user-profile.html">
                        <i class="fa fa-cog u-mr-xsmall"></i>
                        Profile
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="user-profile.html">
                        <i class="fa fa-cog u-mr-xsmall"></i>
                        System Configuration
                    </a>
                </li>
                <li class="c-sidebar__item">
                    <a class="c-sidebar__link" href="user-profile.html">
                        <i class="fa fa-cog u-mr-xsmall"></i>
                        Activity
                    </a>
                </li>            
            </ul>

        </div><!-- // .c-sidebar -->
    </div><!-- // .o-page__sidebar -->

    <main class="o-page__content">
        <header class="c-navbar u-mb-medium">
            <button class="c-sidebar-toggle u-mr-small">
                <span class="c-sidebar-toggle__bar"></span>
                <span class="c-sidebar-toggle__bar"></span>
                <span class="c-sidebar-toggle__bar"></span>
            </button><!-- // .c-sidebar-toggle -->

            <h2 class="c-navbar__title u-mr-auto">Account</h2>

            <div class="c-dropdown dropdown">
                <a class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="c-avatar__img" src="/img/avatar-72.jpg" alt="User's Profile Picture">
                </a>

                <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
                    <a class="c-dropdown__item dropdown-item" href="/edit-profile">Edit Profile</a>
                    <a class="c-dropdown__item dropdown-item" href="/activity-log">View Activity</a>
                    <a class="c-dropdown__item dropdown-item" href="/manage-roles">Manage Roles</a>
                </div>
            </div>
        </header>


        @yield('content')

    </main><!-- // .o-page__content -->

    <!-- Main javascsript -->
    <script src="/js/main.min3661.js?v=2.0"></script>

    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-88739867-2', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="../../www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>