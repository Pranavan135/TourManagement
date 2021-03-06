<?php
App::uses('Hotel', 'Model');

/**
 * Hotel Test Case
 *
 */
class HotelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel',
		'app.town',
		'app.bill'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hotel = ClassRegistry::init('Hotel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hotel);

		parent::tearDown();
	}

}
