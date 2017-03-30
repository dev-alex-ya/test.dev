<?php

/**
*
*/
namespace App\Controllers;

//use App\Models\User;
use Slim\Views\Twig as View;


class HomeController extends Controller
{
	public function index($request, $response)
	{

		/*$user = User::where('name', 'testname')->first();
		var_dump($user->password);*/

/*//метод добавления в базу данных
		User::create([
			'name'=>'ukrsalo',
			'email'=>'ukrsalo@pochta.ru',
			'password'=>'123'
		]);
*/

		return $this->view->render($response, 'home.twig');
	}
}
