<?php

$routes = require base_path('routes.php');

//getting path
$url = parse_url($_SERVER['REQUEST_URI'])['path'];


//function that equates page to path
function routerPaths($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require base_path($routes[$url]);
    } else {
        abort();
    }
}

//abort function that returns status error
function abort($code = 404)
{
    http_response_code($code);


    require base_path("views/{$code}.php");


    die();
}

routerPaths($url, $routes);
