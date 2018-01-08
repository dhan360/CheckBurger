<?php
App::uses('AppModel', 'Model');
/**
 * DetalleCombo Model
 *
 */
class DetalleCombo extends AppModel {
    
    public $belongsTo = array(
        'Producto' => array(
            'className' => 'Producto',
            'foreignKey' => 'id_combo',
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
            'foreignKey' => 'id_producto',
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
