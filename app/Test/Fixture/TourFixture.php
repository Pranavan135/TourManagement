<?php
/**
 * TourFixture
 *
 */
class TourFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'tour_code' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'start_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'driver_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'route_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'coach_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'executed' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'tour_code', 'unique' => 1),
			'route_id' => array('column' => 'route_id', 'unique' => 0),
			'driver_id' => array('column' => 'driver_id', 'unique' => 0),
			'coach_id' => array('column' => 'coach_id', 'unique' => 0)
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
			'tour_code' => 1,
			'start_date' => '2014-03-07',
			'driver_id' => 1,
			'route_id' => 1,
			'coach_id' => 1,
			'executed' => 'Lorem ipsum dolor sit amet'
		),
	);

}
