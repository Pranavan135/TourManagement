<?php
App::uses('DriverRoute', 'Model');

/**
 * DriverRoute Test Case
 *
 */
class DriverRouteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver_route',
		'app.route',
		'app.driver'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DriverRoute = ClassRegistry::init('DriverRoute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DriverRoute);

		parent::tearDown();
	}

}
