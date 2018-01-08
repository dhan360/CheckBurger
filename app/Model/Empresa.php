<?php
App::uses('AppModel', 'Model');
/**
 * Empresa Model
 *
 */
class Empresa extends AppModel {
    
    public $hasMany = array(
		'User' => array(
                    'className' => 'User',
                    'foreignKey' => 'id_empresa',
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
                'Periodo' => array(
                    'className' => 'Periodo',
                    'foreignKey' => 'id_empresa',
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
                'Producto' => array(
                    'className' => 'Producto',
                    'foreignKey' => 'id_empresa',
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
                'Locale' => array(
                    'className' => 'Locale',
                    'foreignKey' => 'id_empresa',
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
                'Suscripcione' => array(
                    'className' => 'Suscripcione',
                    'foreignKey' => 'id_empresa',
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
