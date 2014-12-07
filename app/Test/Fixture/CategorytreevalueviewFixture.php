<?php
/**
 * CategorytreevalueviewFixture
 *
 */
class CategorytreevalueviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'categorytreeparent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categorytreelft' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categorytreerght' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categorytreeactive' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'categorytreeposition_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'positionlevel_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'value_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'size_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'categoryname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'positionname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'valuename' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '20,3', 'unsigned' => false),
		'sizename' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'positionlevelname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'categorytreeparent_id' => 1,
			'categorytreelft' => 1,
			'categorytreerght' => 1,
			'category_id' => 1,
			'categorytreeactive' => 1,
			'categorytreeposition_id' => 1,
			'positionlevel_id' => 1,
			'value_id' => 1,
			'size_id' => 1,
			'categoryname' => 'Lorem ipsum dolor sit amet',
			'positionname' => 'Lorem ipsum dolor sit amet',
			'valuename' => '',
			'sizename' => 'Lorem ipsum dolor sit amet',
			'positionlevelname' => 'Lorem ipsum dolor sit amet'
		),
	);

}
