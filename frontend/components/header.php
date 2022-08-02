<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="keywords" content="myfictions, my fictions, blogs, Sandeep Kattel, myfictions3, myfiction">
    <meta name="description" content="<?php echo $desc;?>">
    <meta name="author" content="<?php echo $author;?>">
    <link rel="stylesheet" href="/assets/css/topbar.css" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#9368E9">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#9368E9">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#9368E9">
    <title><?php echo $header_title;?></title>
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <a class="logo" href="/">My Fiction</a>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- USING CHECKBOX HACK -->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li class="<?php echo $active[0];?>"><a href="/">Home</a></li>
                <li class="<?php echo $active[1];?>"><a href="/blogs">Blogs</a></li>
                <li class="<?php echo $active[2];?>"><a href="/members">Members</a></li>
                <li class="<?php echo $active[3];?>"><a href="/contact">Contact</a></li>
                <li class="<?php echo $active[4];?>"><a href="#">Download</a></li>
            </div>
        </ul>
    </nav>