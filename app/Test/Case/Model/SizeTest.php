<?php
App::uses('Size', 'Model');

/**
 * Size Test Case
 *
 */
class SizeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.size',
		'app.categorytrees_value',
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
		$this->Size = ClassRegistry::init('Size');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Size);

		parent::tearDown();
	}

}
