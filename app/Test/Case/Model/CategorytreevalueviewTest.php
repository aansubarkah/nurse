<?php
App::uses('Categorytreevalueview', 'Model');

/**
 * Categorytreevalueview Test Case
 *
 */
class CategorytreevalueviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categorytreevalueview',
		'app.categorytreeparent',
		'app.category',
		'app.activityview',
		'app.categorytree',
		'app.position',
		'app.activity',
		'app.value',
		'app.transactioncategorytreeview',
		'app.transaction',
		'app.categorytreecategoryview',
		'app.evaluation',
		'app.simplecategorytreeprefixview',
		'app.simplecategorytreevalueview',
		'app.simplecategorytreeview',
		'app.prefix',
		'app.categorytrees_prefix',
		'app.categorytrees_value',
		'app.categorytreeprefixview',
		'app.categorytreeposition',
		'app.prefixposition',
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
		$this->Categorytreevalueview = ClassRegistry::init('Categorytreevalueview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categorytreevalueview);

		parent::tearDown();
	}

}
