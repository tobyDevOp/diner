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
$f3->route('GET /breakfast', function() {
    //echo 'hi';
//    echo "Breakfast";

    //Display a view page
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');

});

// Run Fat-Free
$f3->run(); // Instance Method


echo '<h1>Diner</h1>';