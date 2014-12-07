<?php
App::uses('CategorytreesValue', 'Model');

/**
 * CategorytreesValue Test Case
 *
 */
class CategorytreesValueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categorytrees_value',
		'app.categorytree',
		'app.category',
		'app.activityview',
		'app.value',
		'app.categorytreeparent',
		'app.position',
		'app.categorytreeprefixview',
		'app.categorytreeposition',
		'app.prefixposition',
		'app.categorytreevalueview',
		'app.simplecategorytreeview',
		'app.activity',
		'app.transactioncategorytreeview',
		'app.transaction',
		'app.categorytreecategoryview',
		'app.evaluation',
		'app.simplecategorytreeprefixview',
		'app.simplecategorytreevalueview',
		'app.prefix',
		'app.categorytrees_prefix',
		'app.positionlevel',
		'app.size'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategorytreesValue = ClassRegistry::init('CategorytreesValue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategorytreesValue);

		parent::tearDown();
	}

}
