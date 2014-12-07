<?php
App::uses('Value', 'Model');

/**
 * Value Test Case
 *
 */
class ValueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.value',
		'app.activity',
		'app.categorytree',
		'app.category',
		'app.activityview',
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
		'app.group',
		'app.chief',
		'app.departement',
		'app.chiefs_departement',
		'app.departements_user',
		'app.evaluation',
		'app.period',
		'app.transactioncategorytreeview',
		'app.transaction',
		'app.evidence',
		'app.level',
		'app.levels_user',
		'app.users_positionlevel',
		'app.users_position',
		'app.simplecategorytreeview',
		'app.categorytreeprefixview',
		'app.prefixposition'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Value = ClassRegistry::init('Value');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Value);

		parent::tearDown();
	}

}
