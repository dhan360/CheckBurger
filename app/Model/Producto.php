<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 */
class Producto extends AppModel {
    
    public $belongsTo = array(
        'TiposProducto' => array(
            'className' => 'TiposProducto',
            'foreignKey' => 'id_tipos_producto',
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
     
    public $hasMany = array(
        'DetallePedido' => array(
            'className' => 'DetallePedido',
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
        ),
        'DetalleCombo' => array(
            'className' => 'DetalleCombo',
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
        )
    );
    
    
}
