<?php
/**
 * Pedido Fixture
 */
class PedidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'id_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'total' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'estado' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'id_periodo' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_locale' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_idx' => array('column' => 'id_user', 'unique' => 0),
			'periodo_idx' => array('column' => 'id_periodo', 'unique' => 0),
			'local_idx' => array('column' => 'id_locale', 'unique' => 0)
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
			'created' => '2017-12-07 20:35:19',
			'modified' => '2017-12-07 20:35:19',
			'id_user' => 1,
			'total' => 1,
			'estado' => 1,
			'id_periodo' => 1,
			'id_locale' => 1
		),
	);

}
