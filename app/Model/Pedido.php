<?php
App::uses('AppModel', 'Model');
/**
 * Pedido Model
 *
 */
class Pedido extends AppModel {
    
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id_user',
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
            'foreignKey' => 'id_periodo',
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
       )
    );
}
