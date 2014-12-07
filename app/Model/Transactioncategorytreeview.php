<?php
App::uses('AppModel', 'Model');
/**
 * Transactioncategorytreeview Model
 *
 * @property Activity $Activity
 * @property Categorytree $Categorytree
 * @property Categorytreeparent $Categorytreeparent
 * @property User $User
 * @property Value $Value
 */
class Transactioncategorytreeview extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'activity_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'start' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
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
		'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'activity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categorytree' => array(
			'className' => 'Categorytree',
			'foreignKey' => 'categorytree_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categorytreeparent' => array(
			'className' => 'Categorytreeparent',
			'foreignKey' => 'categorytreeparent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Value' => array(
			'className' => 'Value',
			'foreignKey' => 'value_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
