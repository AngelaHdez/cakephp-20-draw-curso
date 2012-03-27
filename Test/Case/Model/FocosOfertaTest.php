<?php
/* FocosOferta Test cases generated on: 2012-03-23 18:28:01 : 1332523681*/
App::uses('FocosOferta', 'Model');

/**
 * FocosOferta Test Case
 *
 */
class FocosOfertaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.focos_oferta', 'app.foco', 'app.alumno', 'app.alumnos_foco', 'app.oferta', 'app.empresa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->FocosOferta = ClassRegistry::init('FocosOferta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FocosOferta);

		parent::tearDown();
	}

}
