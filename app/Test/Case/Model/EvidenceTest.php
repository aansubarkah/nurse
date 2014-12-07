<?php
App::uses('Evidence', 'Model');

/**
 * Evidence Test Case
 *
 */
class EvidenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evidence',
		'app.transaction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evidence = ClassRegistry::init('Evidence');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evidence);

		parent::tearDown();
	}

}
