<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>My fiction Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="/assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        My Fiction
                    </a>
                </div>
                <ul class="nav">
                    <li <?php
                        if ($header_title == "Dashboard") {
                            echo 'class="nav-item active"';
                        }
                        ?>>
                        <a class="nav-link" href="/admin/">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li <?php
                        if (str_contains($header_title,"Post")) {
                            echo 'class="nav-item active"';
                        }
                        ?>>
                        <a class="nav-link" href="/admin/posts">
                            <i class="nc-icon nc-notes"></i>
                            <p>Posts</p>
                        </a>
                    </li>

                    <li <?php
                        if (str_contains($header_title,"Notifications")) {
                            echo 'class="nav-item active"';
                        }
                        ?>>
                        <a class="nav-link" href="/admin/notifications">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>

                    <li <?php
                        if ($header_title == "Settings") {
                            echo 'class="nav-item active"';
                        }
                        ?>>
                        <a class="nav-link" href="/admin/settings">
                            <i class="nc-icon nc-atom"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li <?php
                        if ($header_title == "Documentation") {
                            echo 'class="nav-item active"';
                        }
                        ?>>
                        <a class="nav-link" href="/admin/docs">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Documentation</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="nc-icon nc-preview"></i>
                            <p>Visit Site  </p>
                        </a>
                    </li>




                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> <?php echo $header_title; ?> </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav ml-auto">
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/logout">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">