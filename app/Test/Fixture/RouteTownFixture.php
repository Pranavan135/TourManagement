<?php
/**
 * RouteTownFixture
 *
 */
class RouteTownFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'route_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'town_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'unique'),
		'indexes' => array(
			'town_id' => array('column' => 'town_id', 'unique' => 1),
			'route_id' => array('column' => 'route_id', 'unique' => 0)
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
			'town_id' => 1
		),
	);

}
