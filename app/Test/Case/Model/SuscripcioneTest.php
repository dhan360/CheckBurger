<?php
App::uses('Suscripcione', 'Model');

/**
 * Suscripcione Test Case
 */
class SuscripcioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.suscripcione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Suscripcione = ClassRegistry::init('Suscripcione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Suscripcione);

		parent::tearDown();
	}

}
