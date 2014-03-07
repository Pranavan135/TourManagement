<?php
App::uses('AppModel', 'Model');
/**
 * Bill Model
 *
 * @property Town $Town
 * @property Hotel $Hotel
 */
class Bill extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ref_no' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'number_of_individuals' => array(
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
		'Town' => array(
			'className' => 'Town',
			'foreignKey' => 'town_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
