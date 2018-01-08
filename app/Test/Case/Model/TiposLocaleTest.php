<?php
App::uses('TiposLocale', 'Model');

/**
 * TiposLocale Test Case
 */
class TiposLocaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipos_locale',
		'app.locale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposLocale = ClassRegistry::init('TiposLocale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposLocale);

		parent::tearDown();
	}

}
