<?php

<<<<<<< HEAD
=======
/**
 * 
 */
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c
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
<<<<<<< HEAD
		'created_at',
		'updated_at',
=======
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c
	);

	/**
	 * 
	 */
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events'          => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
<<<<<<< HEAD
			'events'          => array('before_save'),
=======
			'events'          => array('before_update'),
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c
			'mysql_timestamp' => true,
		),
	);

<<<<<<< HEAD
=======
	/**
	 * 
	 */
	public function url()
	{
		return "post/{$this->url}";
	}
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c

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
<<<<<<< HEAD
=======

	/**
	 * 
	 */
	public static function get_by_url($url)
	{
		return static::query()->where('url', $url)->get_one();
	}
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c
}