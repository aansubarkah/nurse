<?php
App::uses('Period', 'Model');

/**
 * Period Test Case
 *
 */
class PeriodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.period',
		'app.evaluation',
		'app.user',
		'app.value',
		'app.categorytree',
		'app.category',
		'app.activityview',
		'app.categorytreeparent',
		'app.position',
		'app.categorytreeprefixview',
		'app.categorytreeposition',
		'app.prefixposition',
		'app.categorytreevalueview',
		'app.positionlevel',
		'app.size',
		'app.simplecategorytreeview',
		'app.activity',
		'app.transactioncategorytreeview',
		'app.transaction',
		'app.categorytreecategoryview',
		'app.simplecategorytreeprefixview',
		'app.simplecategorytreevalueview',
		'app.prefix',
		'app.categorytrees_prefix',
		'app.categorytrees_value',
		'app.users_period'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Period = ClassRegistry::init('Period');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Period);

		parent::tearDown();
	}

}
