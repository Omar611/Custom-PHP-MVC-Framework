<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
  public function home()
  {
    $param = [
      'name' => 'Omar Tarek'
    ];
    return $this->render('home', $param);
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
