<?php
App::uses('AppModel', 'Model');
/**
 * DetallePedido Model
 *
 */
class DetallePedido extends AppModel {
    
    public $belongsTo = array(
        'Pedido' => array(
            'className' => 'Pedido',
            'foreignKey' => 'id_pedido',
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
