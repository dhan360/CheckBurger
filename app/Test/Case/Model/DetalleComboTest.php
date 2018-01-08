<?php
App::uses('DetalleCombo', 'Model');

/**
 * DetalleCombo Test Case
 */
class DetalleComboTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_combo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetalleCombo = ClassRegistry::init('DetalleCombo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetalleCombo);

		parent::tearDown();
	}

}
