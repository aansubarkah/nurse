<?php
App::uses('Activityview', 'Model');

/**
 * Activityview Test Case
 *
 */
class ActivityviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activityview',
		'app.categorytree',
		'app.value',
		'app.categorytreeparent',
		'app.category',
		'app.position'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Activityview = ClassRegistry::init('Activityview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Activityview);

		parent::tearDown();
	}

}
