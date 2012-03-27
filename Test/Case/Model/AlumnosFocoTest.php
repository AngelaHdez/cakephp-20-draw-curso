<?php
/* AlumnosFoco Test cases generated on: 2012-03-23 18:30:58 : 1332523858*/
App::uses('AlumnosFoco', 'Model');

/**
 * AlumnosFoco Test Case
 *
 */
class AlumnosFocoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.alumnos_foco');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->AlumnosFoco = ClassRegistry::init('AlumnosFoco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlumnosFoco);

		parent::tearDown();
	}

}
