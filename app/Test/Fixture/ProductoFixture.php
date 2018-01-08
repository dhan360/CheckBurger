<?php
/**
 * Producto Fixture
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_tipos_producto' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'precio' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'precio_costo' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'stock' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'id_empresa' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'estado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'tipo_idx' => array('column' => 'id_tipos_producto', 'unique' => 0),
			'empresa_idx' => array('column' => 'id_empresa', 'unique' => 0)
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
			'nombre' => 'Lorem ipsum dolor sit amet',
			'id_tipos_producto' => 1,
			'precio' => 1,
			'precio_costo' => 1,
			'stock' => 1,
			'id_empresa' => 1,
			'estado' => 'Lorem ipsum dolor sit amet'
		),
	);

}
