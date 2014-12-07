<?php
App::uses('AppModel', 'Model');
/**
 * Categorytree Model
 *
 * @property Categorytree $ParentCategorytree
 * @property Category $Category
 * @property Position $Position
 * @property Activity $Activity
 * @property Activityview $Activityview
 * @property Categorytreecategoryview $Categorytreecategoryview
 * @property Categorytree $ChildCategorytree
 * @property Evaluation $Evaluation
 * @property Simplecategorytreeprefixview $Simplecategorytreeprefixview
 * @property Simplecategorytreevalueview $Simplecategorytreevalueview
 * @property Simplecategorytreeview $Simplecategorytreeview
 * @property Transactioncategorytreeview $Transactioncategorytreeview
 * @property Prefix $Prefix
 * @property Value $Value
 */
class Categorytree extends AppModel {

/**
 * Behaviors
 *
 * @var array
 */
	public $actsAs = array(
		'Tree',
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'position_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ParentCategorytree' => array(
			'className' => 'Categorytree',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'categorytree_id',
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
			'foreignKey' => 'categorytree_id',
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
		'Categorytreecategoryview' => array(
			'className' => 'Categorytreecategoryview',
			'foreignKey' => 'categorytree_id',
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
		'ChildCategorytree' => array(
			'className' => 'Categorytree',
			'foreignKey' => 'parent_id',
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
			'foreignKey' => 'categorytree_id',
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
		'Simplecategorytreeprefixview' => array(
			'className' => 'Simplecategorytreeprefixview',
			'foreignKey' => 'categorytree_id',
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
			'foreignKey' => 'categorytree_id',
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
		'Simplecategorytreeview' => array(
			'className' => 'Simplecategorytreeview',
			'foreignKey' => 'categorytree_id',
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
			'foreignKey' => 'categorytree_id',
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
		'Prefix' => array(
			'className' => 'Prefix',
			'joinTable' => 'categorytrees_prefixes',
			'foreignKey' => 'categorytree_id',
			'associationForeignKey' => 'prefix_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Value' => array(
			'className' => 'Value',
			'joinTable' => 'categorytrees_values',
			'foreignKey' => 'categorytree_id',
			'associationForeignKey' => 'value_id',
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
