<?php
/* Ofertum Test cases generated on: 2012-03-23 18:21:13 : 1332523273*/
App::uses('Ofertum', 'Model');

/**
 * Ofertum Test Case
 *
 */
class OfertumTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ofertum = ClassRegistry::init('Ofertum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ofertum);

		parent::tearDown();
	}

}
