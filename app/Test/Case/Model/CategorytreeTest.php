<?php
App::uses('Categorytree', 'Model');

/**
 * Categorytree Test Case
 *
 */
class CategorytreeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.categorytrees_value'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categorytree = ClassRegistry::init('Categorytree');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categorytree);

		parent::tearDown();
	}

}
