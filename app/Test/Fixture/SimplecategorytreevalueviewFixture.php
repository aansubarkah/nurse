<?php
/**
 * SimplecategorytreevalueviewFixture
 *
 */
class SimplecategorytreevalueviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'key' => 'primary'),
		'categorytree_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'position_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'positionlevel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'value_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'size_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'position' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'positionlevel' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '20,3', 'unsigned' => false),
		'size' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'position_id' => 1,
			'positionlevel_id' => 1,
			'value_id' => 1,
			'size_id' => 1,
			'active' => 1,
			'position' => 'Lorem ipsum dolor sit amet',
			'positionlevel' => 'Lorem ipsum dolor sit amet',
			'value' => '',
			'size' => 'Lorem ipsum dolor sit amet'
		),
	);

}
