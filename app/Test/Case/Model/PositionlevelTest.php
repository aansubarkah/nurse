<?php
App::uses('Positionlevel', 'Model');

/**
 * Positionlevel Test Case
 *
 */
class PositionlevelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.positionlevel',
		'app.position',
		'app.categorytrees_value',
		'app.categorytree',
		'app.category',
		'app.activityview',
		'app.value',
		'app.categorytreeparent',
		'app.categorytreeprefixview',
		'app.categorytreeposition',
		'app.prefixposition',
		'app.categorytreevalueview',
		'app.size',
		'app.simplecategorytreeview',
		'app.activity',
		'app.transactioncategorytreeview',
		'app.transaction',
		'app.categorytreecategoryview',
		'app.evaluation',
		'app.user',
		'app.period',
		'app.users_period',
		'app.simplecategorytreeprefixview',
		'app.simplecategorytreevalueview',
		'app.prefix',
		'app.categorytrees_prefix',
		'app.users_positionlevel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Positionlevel = ClassRegistry::init('Positionlevel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Positionlevel);

		parent::tearDown();
	}

}
