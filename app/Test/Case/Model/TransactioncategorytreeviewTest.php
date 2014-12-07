<?php
App::uses('Transactioncategorytreeview', 'Model');

/**
 * Transactioncategorytreeview Test Case
 *
 */
class TransactioncategorytreeviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transactioncategorytreeview',
		'app.activity',
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
		'app.simplecategorytreeview',
		'app.users_position',
		'app.categorytreeprefixview',
		'app.prefixposition',
		'app.evaluation',
		'app.period',
		'app.transaction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transactioncategorytreeview = ClassRegistry::init('Transactioncategorytreeview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transactioncategorytreeview);

		parent::tearDown();
	}

}
