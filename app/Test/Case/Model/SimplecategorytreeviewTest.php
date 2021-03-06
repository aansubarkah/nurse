<?php
App::uses('Simplecategorytreeview', 'Model');

/**
 * Simplecategorytreeview Test Case
 *
 */
class SimplecategorytreeviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.simplecategorytreeview',
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
		'app.simplecategorytreevalueview',
		'app.users_period',
		'app.user',
		'app.users_positionlevel',
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
		$this->Simplecategorytreeview = ClassRegistry::init('Simplecategorytreeview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Simplecategorytreeview);

		parent::tearDown();
	}

}
