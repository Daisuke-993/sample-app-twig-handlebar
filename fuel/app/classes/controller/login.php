<?php

class Controller_Login extends Controller
{

	public function action_login()
	{
		$view = ViewModel::forge('login');
		$view->set('hello', 'Hello');
		return $view;
	}

}
