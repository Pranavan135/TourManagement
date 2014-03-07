<?php
App::uses('AppModel', 'Model');
/**
 * Route Model
 *
 * @property RouteTown $RouteTown
 * @property Tour $Tour
 */
class Route extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'RouteTown' => array(
			'className' => 'RouteTown',
			'foreignKey' => 'route_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Tour' => array(
			'className' => 'Tour',
			'foreignKey' => 'route_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
