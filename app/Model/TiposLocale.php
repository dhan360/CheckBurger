<?php
App::uses('AppModel', 'Model');
/**
 * TiposLocale Model
 *
 * @property Locale $
 */
class TiposLocale extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'' => array(
			'className' => 'Locale',
			'foreignKey' => 'id_tipos_locale',
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
