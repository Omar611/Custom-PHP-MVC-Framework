<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{
  public function home()
  {
    $param = [
      'name' => 'Omar Tarek'
    ];
    return Application::$app->router->renderView('home', $param);
  }

  public function contact()
  {
    return Application::$app->router->renderView('contact');
  }

  public function handelContact()
  {
    return 'handel submitted data';
  }
}
