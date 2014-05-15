<?php

/**
 * 
 */
class Controller_Blog extends Controller_Template
{
	/**
	 * 
	 */
<<<<<<< HEAD
	public function get_index()
	{
		$this->template->title = 'My Blog';
		$this->template->body  = View::forge('blog/index');
		$this->template->body->posts = Model_Post::query()->get();
	}
=======
	public $template = 'template';

	/**
	 * 
	 */
	public function get_index()
	{
		// template title
		$this->template->title = 'My Blog';
		
		// template body content
		$this->template->body = View::forge('blog/index');
		
		// send posts to view
		$this->template->body->posts = Model_Post::query()->get();
	}

	/**
	 * 
	 */
	public function get_view($url)
	{
		// get blog post
		if (! $post = Model_Post::get_by_url($url))
		{
			throw new HttpNotFoundException; // 404
		}

		// template title
		$this->template->title = "My Blog - {$post->title}";
		
		// template body content
		$this->template->body = View::forge('blog/view');
		
		// send post to view
		$this->template->body->post = $post;
	}
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c
}