<?php
/**
 * ActivityviewFixture
 *
 */
class ActivityviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'key' => 'primary'),
		'categorytree_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'value_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'activityname' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'categorytreeparent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categorytreelft' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categorytreerght' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'position_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categoryname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'valuename' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '20,3', 'unsigned' => false),
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
			'id' => 1,
			'categorytree_id' => 1,
			'value_id' => 1,
			'activityname' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'categorytreeparent_id' => 1,
			'categorytreelft' => 1,
			'categorytreerght' => 1,
			'category_id' => 1,
			'position_id' => 1,
			'categoryname' => 'Lorem ipsum dolor sit amet',
			'valuename' => ''
		),
	);

}
