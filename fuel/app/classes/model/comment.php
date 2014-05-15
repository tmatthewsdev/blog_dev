<?php

/**
 * 
 */
class Model_Comment extends Orm\Model
{
	/**
	 * 
	 */
	protected static $_properties = array(
		'id',
		'post_id',
		'user_id',
		'text',
		'approved',
		'created_at',
		'updated_at',
	);

	/**
	 * 
	 */
	protected static $_belongs_to = array(
		'post' => array(
			'key_from'       => 'post_id',
			'model_to'       => 'Model_Post',
			'key_to'         => 'id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		)
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
			'events'          => array('before_update'),
			'mysql_timestamp' => true,
		),
	);
}