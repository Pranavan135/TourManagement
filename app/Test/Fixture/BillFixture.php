<?php
/**
 * BillFixture
 *
 */
class BillFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ref_no' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'tour_code' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'town_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'hotel_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bill_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'number_of_individuals' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'amount' => array('type' => 'float', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ref_no', 'unique' => 1),
			'tour_code' => array('column' => 'tour_code', 'unique' => 0),
			'town_id' => array('column' => 'town_id', 'unique' => 0),
			'hotel_id' => array('column' => 'hotel_id', 'unique' => 0)
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
			'ref_no' => 1,
			'tour_code' => 1,
			'town_id' => 1,
			'hotel_id' => 1,
			'bill_date' => '2014-03-07',
			'number_of_individuals' => 1,
			'amount' => 1
		),
	);

}
