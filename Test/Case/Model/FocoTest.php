<?php
/* Foco Test cases generated on: 2012-03-23 18:52:10 : 1332525130*/
App::uses('Foco', 'Model');

/**
 * Foco Test Case
 *
 */
class FocoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.foco', 'app.alumno', 'app.alumnos_foco', 'app.oferta', 'app.empresa', 'app.focos_oferta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Foco = ClassRegistry::init('Foco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foco);

		parent::tearDown();
	}

}
