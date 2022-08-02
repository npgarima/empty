<?php
/*
* @ SULAV PARAJULI https://facebook.com/thesulav
* @ CREATED AT July 29, 2022 
*
* This File is the entry point of the website and contains 
* the main routing setting for the whole site
*/

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
// This route handling function will only be executed when visiting http(s)://www.example.org/about
$router->get('/', function () {
    include __DIR__ . '/frontend/home.php';
});

$router->get('/blogs', function () {
    include __DIR__ . '/frontend/blogs.php';
});

$router->get('/single/(\d+)', function ($id) {
    include __DIR__ . '/frontend/single.php';
});

$router->get('/members', function () {
    include __DIR__ . '/frontend/members.php';
});

$router->get('/contact', function () {
    include __DIR__ . '/frontend/contact.php';
});





// // router configuartion for admin panel
$router->before('GET|POST', '/admin/.*', function () {
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: /admin-signin/login.php");
        exit;
        exit;
    }
});

// // router configuartion for admin panel
$router->before('GET|POST', '/admin', function () {
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: /admin-signin/login.php");
        exit;
        exit;
    }
});

$router->mount('/admin', function () use ($router) {

    $router->get('/', function () {
        include __DIR__ . '/admin-panel/index.php';
    });


    $router->get('/posts', function () {
        include __DIR__ . '/admin-panel/posts.php';
    });

    $router->get('/notifications', function () {
        include __DIR__ . '/admin-panel/notification.php';
    });

    $router->get('/notifications/add', function () {
        include __DIR__ . '/admin-panel/addnotification.php';
    });


    $router->post('/notifications/add', function () {
        include __DIR__ . '/admin-panel/addnotification.php';
    });

    $router->get('/posts/add', function () {
        include __DIR__ . '/admin-panel/addpost.php';
    });


    $router->post('/posts/add', function () {
        include __DIR__ . '/admin-panel/addpost.php';
    });


    $router->get('/posts/edit', function () {
        include __DIR__ . '/admin-panel/editpost.php';
    });


    $router->post('/posts/edit', function () {
        include __DIR__ . '/admin-panel/editpost.php';
    });


    $router->get('/posts/delete', function () {
        include __DIR__ . '/admin-panel/deletepost.php';
    });

    $router->get('/members', function () {
        include __DIR__ . '/admin-panel/members.php';
    });

    $router->get('/settings', function () {
        include __DIR__ . '/admin-panel/settings.php';
    });

    $router->get('/docs', function () {
        include __DIR__ . '/admin-panel/docs.php';
    });



    $router->get('/logout', function () {
        // Initialize the session
        session_start();

        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session.
        session_destroy();

        // Redirect to login page
        header("location: /admin");
        exit;
    });
});




$router->run();
