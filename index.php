<?php

/* Toby Goetz
 * 1/16/2024
 * https://tgoetzgr.greenriverdev.com/SDEV328/diner/index.php
 * This is my CONTROLLER for the Diner App
 */
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate Fat-Free framework (F3)
$f3 = Base::instance(); // Static Method

// Define a default route
$f3->route('GET /order1', function() {
    echo 'Order Form Part I';

    //Display a view page
    $view = new Template();
    echo $view->render('views/order-form-1.html');

});

// Run Fat-Free
$f3->run(); // Instance Method


echo '<h1>Diner</h1>';