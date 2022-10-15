<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

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
    return $this->render('contact');
  }

  public function handelContact(Request $request)
  {
    $body = $request->getBody();
    // Do some logic
    return json_encode($body);
  }
}
