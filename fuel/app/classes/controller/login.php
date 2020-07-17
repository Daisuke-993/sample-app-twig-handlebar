<?php

use \Model\User;

class Controller_Login extends Controller
{

	public function action_login()
	{
		$data = array();

		if(Input::post('email') && Input::post('password')){
			$data['email'] = Input::post('email');
			$password = Input::post('password');

			if(Auth::login($data['email'], $password)){

				return 'Success to login';

			}

			$data['error'] = 'Values is incorrected';
			
		}
		
		$view = ViewModel::forge('login');
		$view->set('data', $data);
		return $view;
	}

}
