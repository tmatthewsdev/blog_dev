<?php

/**
 * 
 */
abstract class Controller_App extends Controller_Template
{
	/**
	 * 
	 */
	protected $auth;

	/**
	 * 
	 */
	protected $user;

	/**
	 * 
	 */
	public function before()
	{
		parent::before();

		$this->_init_user();

		isset($this->template) and $this->_init_template();
	}

	/**
	 * 
	 */
	private function _init_user()
	{
		$this->auth = Auth::instance();

		if ($this->auth->check())
		{
			$this->user = Model_User::get_by_id($this->auth->get_user_id()[1]);
		}
	}

	/**
	 * 
	 */
	protected function _init_template()
	{
		if ($this->user)
		{
			$this->template->user = $this->user;
		}
	}

}