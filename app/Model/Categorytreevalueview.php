<?php
App::uses('AppModel', 'Model');
/**
 * Categorytreevalueview Model
 *
 * @property Categorytreeparent $Categorytreeparent
 * @property Category $Category
 * @property Categorytreeposition $Categorytreeposition
 * @property Positionlevel $Positionlevel
 * @property Value $Value
 * @property Size $Size
 */
class Categorytreevalueview extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categorytreeparent' => array(
			'className' => 'Categorytreeparent',
			'foreignKey' => 'categorytreeparent_id',
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
		'Categorytreeposition' => array(
			'className' => 'Categorytreeposition',
			'foreignKey' => 'categorytreeposition_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Positionlevel' => array(
			'className' => 'Positionlevel',
			'foreignKey' => 'positionlevel_id',
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
		),
		'Size' => array(
			'className' => 'Size',
			'foreignKey' => 'size_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
