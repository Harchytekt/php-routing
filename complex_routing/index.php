<?php
// Include router class
include('classes/Route.php');

$route = new Route();

//$route->add("/", "views/home.php");

$route->add("/about", "views/about.php");
$route->add("/about/{name}", "views/about.php");

//example route with multiple params
$route->add("/plan", "views/plan.php");
$route->add("/plan/{target}", "views/plan.php");

$route->notFound("views/404.php");

var_dump();
