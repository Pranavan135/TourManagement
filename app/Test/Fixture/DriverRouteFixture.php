<?php
/**
 * DriverRouteFixture
 *
 */
class DriverRouteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'route_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'driver_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('route_id', 'driver_id'), 'unique' => 1),
			'route_id' => array('column' => 'route_id', 'unique' => 1),
			'driver_id' => array('column' => 'driver_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'route_id' => 1,
			'driver_id' => 1
		),
	);

}
