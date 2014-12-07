<?php
App::uses('AppModel', 'Model');
/**
 * Value Model
 *
 * @property Activity $Activity
 * @property Activityview $Activityview
 * @property Categorytreevalueview $Categorytreevalueview
 * @property Evaluation $Evaluation
 * @property Simplecategorytreevalueview $Simplecategorytreevalueview
 * @property Transactioncategorytreeview $Transactioncategorytreeview
 * @property Categorytree $Categorytree
 */
class Value extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'active' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'value_id',
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
		'Activityview' => array(
			'className' => 'Activityview',
			'foreignKey' => 'value_id',
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
		'Categorytreevalueview' => array(
			'className' => 'Categorytreevalueview',
			'foreignKey' => 'value_id',
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
		'Evaluation' => array(
			'className' => 'Evaluation',
			'foreignKey' => 'value_id',
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
		'Simplecategorytreevalueview' => array(
			'className' => 'Simplecategorytreevalueview',
			'foreignKey' => 'value_id',
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
		'Transactioncategorytreeview' => array(
			'className' => 'Transactioncategorytreeview',
			'foreignKey' => 'value_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Categorytree' => array(
			'className' => 'Categorytree',
			'joinTable' => 'categorytrees_values',
			'foreignKey' => 'value_id',
			'associationForeignKey' => 'categorytree_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
