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
    public Response $response;
    public static Application $app;
    public static string $ROOT_DIR;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request);
    }

    public function run()
    {
       echo $this->router->resolve();
    }
}
