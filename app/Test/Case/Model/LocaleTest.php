<?php
App::uses('Locale', 'Model');

/**
 * Locale Test Case
 */
class LocaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.locale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Locale = ClassRegistry::init('Locale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Locale);

		parent::tearDown();
	}

}
