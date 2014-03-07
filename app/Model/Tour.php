<?php
App::uses('AppModel', 'Model');
/**
 * Tour Model
 *
 * @property Driver $Driver
 * @property Route $Route
 * @property Coach $Coach
 */
class Tour extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tour_code' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Driver' => array(
			'className' => 'Driver',
			'foreignKey' => 'driver_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'route_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Coach' => array(
			'className' => 'Coach',
			'foreignKey' => 'coach_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
