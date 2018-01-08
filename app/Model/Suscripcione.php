<?php
App::uses('AppModel', 'Model');
/**
 * Suscripcione Model
 *
 */
class Suscripcione extends AppModel {
    
    public $belongsTo = array(
        'Empresa' => array(
            'className' => 'Empresa',
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
        'TiposSuscripcione' => array(
            'className' => 'TiposSuscripcione',
            'foreignKey' =>'id_tipos_suscripcione',
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
