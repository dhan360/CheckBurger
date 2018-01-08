<?php
/**
 * Locale Fixture
 */
class LocaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_tipos_locale' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'calle' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'depto' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'villa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_empresa' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'tipo_local_idx' => array('column' => 'id_tipos_locale', 'unique' => 0),
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
			'id_tipos_locale' => 1,
			'calle' => 'Lorem ipsum dolor sit amet',
			'numero' => 1,
			'depto' => 1,
			'villa' => 'Lorem ipsum dolor sit amet',
			'id_empresa' => 1
		),
	);

}
