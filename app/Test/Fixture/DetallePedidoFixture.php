<?php
/**
 * DetallePedido Fixture
 */
class DetallePedidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_pedido' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_producto' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'precio_unitario' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cantidad' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'total' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'pedido_idx' => array('column' => 'id_pedido', 'unique' => 0),
			'producto_idx' => array('column' => 'id_producto', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'id_pedido' => 1,
			'id_producto' => 1,
			'precio_unitario' => 1,
			'cantidad' => 1,
			'total' => 1
		),
	);

}
