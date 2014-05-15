<?php

/**
 * 
 */
class Controller_Blog extends Controller_App
{
	/**
	 * 
	 */
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


	/**
	 * 
	 */
	public function post_view($url)
	{
		// get blog post
		if (! $post = Model_Post::get_by_url($url))
		{
			throw new HttpNotFoundException; // 404
		}

		$comment = new Model_Comment;
		$comment->post    = $post;
		$comment->user_id = 1;
		$comment->text    = Input::post('comment');
		$comment->save();


		Response::redirect($post->url());
	}
}