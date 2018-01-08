<?php
App::uses('TiposProducto', 'Model');

/**
 * TiposProducto Test Case
 */
class TiposProductoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipos_producto',
		'app.producto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposProducto = ClassRegistry::init('TiposProducto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposProducto);

		parent::tearDown();
	}

}
