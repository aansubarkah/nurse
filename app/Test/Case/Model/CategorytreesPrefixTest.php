<?php
App::uses('CategorytreesPrefix', 'Model');

/**
 * CategorytreesPrefix Test Case
 *
 */
class CategorytreesPrefixTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categorytrees_prefix',
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
		'app.categorytrees_value'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategorytreesPrefix = ClassRegistry::init('CategorytreesPrefix');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategorytreesPrefix);

		parent::tearDown();
	}

}
