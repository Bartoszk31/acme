<?php

$router = new AltoRouter();

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'about_us');

new \App\RouteDispatcher($router);

