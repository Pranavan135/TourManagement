<?php
/**
 * PassengerFixture
 *
 */
class PassengerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'tour_code' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('customer_id', 'tour_code'), 'unique' => 1),
			'tour_code' => array('column' => 'tour_code', 'unique' => 0)
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
			'customer_id' => 1,
			'tour_code' => 1
		),
	);

}
