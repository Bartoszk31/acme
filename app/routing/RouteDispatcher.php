<?php

namespace App;

use AltoRouter;

class RouteDispatcher
{

    /**
     * @var array|bool
     */
    protected $match;

    /**
     * @var string
     */
    protected $controller = '';

    /**
     * @var string
     */
    protected $method = '';

    public function __construct(AltoRouter $router)
    {

        $this->match = $router->match();

        if ($this->match) {
            $target = explode('@', $this->match['target']);
            $this->controller = $target[0];
            $this->method = empty($target[1]) ? 'index' : $target[1];

            if (is_callable([new $this->controller, $this->method])) {
                call_user_func_array([new $this->controller, $this->method], [$this->match['params']]);
            } else {
                echo 'This method ' . $this->method . ' is not exist in controller ' . $this->controller;
            }
        } else {
            header($_SERVER['SERVER_PROTOCOL'] . '404 not found');
            view('errors/404');
        }

    }

}