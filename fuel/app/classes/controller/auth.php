<?php

/**
 * 
 */
class Controller_Auth extends Controller_App
{
	/**
	 * 
	 */
	public function get_register()
	{
		$this->template->body = View::forge('auth/register');
	}

	/**
	 * 
	 */
	public function post_register()
	{
		$email    = Input::post('email');
		$password = Input::post('password');


		$success = Auth::create_user($email, $password, $email);

		// try
		// {

		// }
		// catch (SimpleUserUpdateException $e)
		// {

		// }

		if ($success)
		{
			Auth::login($email, $password);
		}

		Response::redirect('/');
		
	}



	/**
	 * 
	 */
	public function get_login()
	{
		$this->template->body = View::forge('auth/login');
	}

	/**
	 * 
	 */
	public function post_login()
	{
		
	}


	/**
	 * 
	 */
	public function action_logout()
	{
		$this->auth->logout() and Response::redirect('/');
	}

}