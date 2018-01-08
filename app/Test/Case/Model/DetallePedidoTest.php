<?php
App::uses('DetallePedido', 'Model');

/**
 * DetallePedido Test Case
 */
class DetallePedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_pedido'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetallePedido = ClassRegistry::init('DetallePedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetallePedido);

		parent::tearDown();
	}

}
