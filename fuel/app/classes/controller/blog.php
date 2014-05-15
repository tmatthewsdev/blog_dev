<?php

/**
 * 
 */
class Controller_Blog extends Controller_Template
{
	/**
	 * 
	 */
	public function get_index()
	{
		$this->template->title = 'My Blog';
		$this->template->body  = View::forge('blog/index');
		$this->template->body->posts = Model_Post::query()->get();
	}
}