<?php
/**
 * Suscripcione Fixture
 */
class SuscripcioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_empresa' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_tipos_suscripcione' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'inicio' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'fin' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_empresa_idx' => array('column' => 'id_empresa', 'unique' => 0),
			'tipo_idx' => array('column' => 'id_tipos_suscripcione', 'unique' => 0)
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
			'id_empresa' => 1,
			'id_tipos_suscripcione' => 1,
			'inicio' => '2018-01-09 00:12:50',
			'fin' => '2018-01-09 00:12:50',
			'created' => '2018-01-09 00:12:50',
			'modified' => '2018-01-09 00:12:50'
		),
	);

}
