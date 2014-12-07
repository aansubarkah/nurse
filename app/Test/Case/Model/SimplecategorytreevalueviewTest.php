<?php
App::uses('Simplecategorytreevalueview', 'Model');

/**
 * Simplecategorytreevalueview Test Case
 *
 */
class SimplecategorytreevalueviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.simplecategorytreevalueview',
		'app.categorytree',
		'app.category',
		'app.activityview',
		'app.value',
		'app.categorytreeparent',
		'app.position',
		'app.profession',
		'app.categorytreecategoryview',
		'app.categorytrees_prefix',
		'app.prefix',
		'app.simplecategorytreeprefixview',
		'app.positionlevel',
		'app.categorytrees_value',
		'app.size',
		'app.categorytreevalueview',
		'app.categorytreeposition',
		'app.users_period',
		'app.user',
		'app.users_positionlevel',
		'app.simplecategorytreeview',
		'app.users_position',
		'app.categorytreeprefixview',
		'app.prefixposition',
		'app.activity',
		'app.transactioncategorytreeview',
		'app.transaction',
		'app.evaluation',
		'app.period'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Simplecategorytreevalueview = ClassRegistry::init('Simplecategorytreevalueview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Simplecategorytreevalueview);

		parent::tearDown();
	}

}
