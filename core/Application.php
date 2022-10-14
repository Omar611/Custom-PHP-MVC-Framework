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
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
       echo $this->router->resolve();
    }
}
