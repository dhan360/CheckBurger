<?php
App::uses('AppModel', 'Model');
/**
 * TiposSuscripcione Model
 *
 * @property Suscripcione $Suscripcione
 */
class TiposSuscripcione extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Suscripcione' => array(
			'className' => 'Suscripcione',
			'foreignKey' => 'id_tipos_suscripcione',
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
