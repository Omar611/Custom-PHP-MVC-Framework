<?php

namespace app\core;

/**
 * Class Router
 * 
 * @author: Omar Tarek <omartarek611@outlook.com>
 * @package app\core
 */
class Router
{
  protected array $routes = [];
  public Request $request;

  public function __construct(Request $request)
  {
    $this->request = $request;
  }

  public function get($path, $callback)
  {
    $this->routes['get'][$path] =  $callback;
  }

  public function resolve()
  {
    $path = $this->request->getPath();
    $method = $this->request->getMethod();
    $callback = $this->routes[$method][$path] ?? false;
    if(!$callback){
      echo "404 Page Not found";
      exit;
    }
    echo call_user_func($callback);
  }

  public function run()
  {
  }
}
