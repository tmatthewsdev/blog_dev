<?php

/**
 * 
 */
class Model_Post extends Orm\Model
{
	/**
	 * 
	 */
	protected static $_properties = array(
		'id',
		'url',
		'title',
		'content',
		'created_at',
		'updated_at',
	);

	/**
	 * 
	 */
	protected static $_has_many = array(
		'comments' => array(
			'key_from'       => 'id',
			'model_to'       => 'Model_Comment',
			'key_to'         => 'post_id',
			'cascade_save'   => true,
			'cascade_delete' => true,
		)
	);

	/**
	 * 
	 */
	protected static $_observers = array(
		'Orm\\Observer_Slug' => array(
			'events'    => array('before_insert', 'before_update'),
			'source'    => 'title',     // property used to base the slug on, may also be array of properties
			'property'  => 'url',       // property to set the slug on when empty
			'separator' => '-',         // property to set the separator
		),
		'Orm\Observer_CreatedAt' => array(
			'events'          => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events'          => array('before_update'),
			'mysql_timestamp' => true,
		),
	);


	/**
	 * 
	 */
	public function url()
	{
		return "post/{$this->url}";
	}

	/**
	 * 
	 */
	public function datetime()
	{
		return new DateTime($this->created_at);
	}

	/**
	 * 
	 */
	public function date($format = "Y-m-d")
	{
		return $this->datetime()->format($format);
	}

	/**
	 * 
	 */
	public static function get_by_url($url)
	{
		return static::query()->where('url', $url)->get_one();
	}
}