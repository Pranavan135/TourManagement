<?php
/**
 * CoachFixture
 *
 */
class CoachFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'reg_no' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'capacity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'last_service_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'last_service_mileage' => array('type' => 'float', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'reg_no', 'unique' => 1)
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
			'reg_no' => 1,
			'capacity' => 1,
			'last_service_date' => '2014-03-07',
			'last_service_mileage' => 1
		),
	);

}
