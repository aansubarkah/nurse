<?php
App::uses('EducationsUser', 'Model');

/**
 * EducationsUser Test Case
 *
 */
class EducationsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.educations_user',
		'app.education',
		'app.user',
		'app.group',
		'app.chief',
		'app.departement',
		'app.chiefs_departement',
		'app.departements_user',
		'app.evaluation',
		'app.period',
		'app.users_period',
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
		'app.users_positionlevel',
		'app.simplecategorytreeview',
		'app.users_position',
		'app.categorytreeprefixview',
		'app.prefixposition',
		'app.transactioncategorytreeview',
		'app.transaction',
		'app.evidence',
		'app.level',
		'app.levels_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EducationsUser = ClassRegistry::init('EducationsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EducationsUser);

		parent::tearDown();
	}

}
