<?php
App::uses('TiposUser', 'Model');

/**
 * TiposUser Test Case
 */
class TiposUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipos_user',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposUser = ClassRegistry::init('TiposUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposUser);

		parent::tearDown();
	}

}
