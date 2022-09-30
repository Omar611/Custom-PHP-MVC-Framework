<?php

namespace app\core;

/**
 * Class Application
 * 
 * @author: Omar Tarek <omartarek611@outlook.com>
 * @package app\core
 */
class Application
{
    public Router $router;

    public function __construct()
    {
        // create new instance of Router class
        $this->router = new Router();
    }

    // create run method
    public function run()
    {
        // call method from Router class
        $this->router->run();
    }
}
