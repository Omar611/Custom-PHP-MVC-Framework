<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    if ($request->isPost()) {
      return json_encode( $request->getBody());
    }
    return $this->render('login');
  }

  public function register(Request $request)
  {
    if ($request->isPost()) {
      return json_encode( $request->getBody());
    }
    return $this->render('register');
  }
}
