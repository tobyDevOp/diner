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
$f3->route('GET|POST /order1', function($f3) {
//    echo 'Order Form Part I';

    // if the form has been posted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate the data
        $food = $_POST['food'];
        $meal = $_POST['meal'];

        // Put the data in the session array
        $f3->set('SESSION.food', $food);
        $f3->set('SESSION.meal', $meal);

        // Redirect to order2 route
        $f3->reroute('summary');
    }

    //Display a view page
    $view = new Template();
    echo $view->render('views/order-form-1.html');

});

// Define an order summary route
$f3->route('GET /summary', function($f3) {

    $view = new Template();
    echo $view->render('views/order-summary-1');
});



// Run Fat-Free
$f3->run(); // Instance Method


echo '<h1>Diner</h1>';