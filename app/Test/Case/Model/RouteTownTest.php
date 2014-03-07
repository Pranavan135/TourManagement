<?php
App::uses('RouteTown', 'Model');

/**
 * RouteTown Test Case
 *
 */
class RouteTownTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.route_town',
		'app.route',
		'app.town'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RouteTown = ClassRegistry::init('RouteTown');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RouteTown);

		parent::tearDown();
	}

}
