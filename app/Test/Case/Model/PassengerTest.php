<?php
App::uses('Passenger', 'Model');

/**
 * Passenger Test Case
 *
 */
class PassengerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.passenger',
		'app.customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Passenger = ClassRegistry::init('Passenger');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Passenger);

		parent::tearDown();
	}

}
