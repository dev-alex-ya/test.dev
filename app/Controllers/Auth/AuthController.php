<?php

namespace App\Controllers\Auth;

use \App\Models\User;
use \App\Controllers\Controller;

class AuthController extends Controller
{
	public function getSignUp($request, $response)
	{
		return $this->view->render($response, 'auth/signup.twig');
	}

  public function postSignUp($request, $response)
	{
    //var_dump($request->getParams());

    //принимаем параметры формы
    $user = User::create([
      'email' => $request->getParam('email'),
      'name' => $request->getParam('name'),
      'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
    ]);

    //...с перенаправлением
    return $response->withRedirect($this->router->pathFor('home'));
	}
}
