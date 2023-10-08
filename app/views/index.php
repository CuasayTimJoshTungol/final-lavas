<?php
// index.php

// Load the router
$routes = include 'config/routes.php';

// Get the requested route
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$route = $routes["$method $uri"];

// Parse the route to get the controller and method
list($controllerName, $methodName) = explode('@', $route);

// Include the controller file
include "controllers/$controllerName.php";

// Create an instance of the controller and call the method
$controller = new $controllerName();
$controller->$methodName();
