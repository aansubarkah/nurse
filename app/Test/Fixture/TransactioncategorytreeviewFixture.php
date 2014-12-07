<?php
/**
 * TransactioncategorytreeviewFixture
 *
 */
class TransactioncategorytreeviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => false, 'key' => 'primary'),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'categorytree_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categorytreeparent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'start' => array('type' => 'date', 'null' => false, 'default' => null),
		'end' => array('type' => 'date', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'value_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'valuename' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '20,3', 'unsigned' => false),
		'categoryname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'activity_id' => 1,
			'categorytree_id' => 1,
			'categorytreeparent_id' => 1,
			'start' => '2014-11-21',
			'end' => '2014-11-21',
			'user_id' => 1,
			'value_id' => 1,
			'valuename' => '',
			'categoryname' => 'Lorem ipsum dolor sit amet'
		),
	);

}
