<?php
App::uses('TiposSuscripcione', 'Model');

/**
 * TiposSuscripcione Test Case
 */
class TiposSuscripcioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipos_suscripcione',
		'app.suscripcione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposSuscripcione = ClassRegistry::init('TiposSuscripcione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposSuscripcione);

		parent::tearDown();
	}

}
