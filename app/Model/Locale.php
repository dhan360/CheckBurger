<?php
App::uses('AppModel', 'Model');
/**
 * Locale Model
 *
 */
class Locale extends AppModel {
    
    public $belongsTo = array(
        'TiposLocale' => array(
            'className' => 'TiposLocal',
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
        ),
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
        )
    );
    
    
}
