<?php
/* Oferta Fixture generated on: 2012-03-23 19:11:18 : 1332526278 */

/**
 * OfertaFixture
 *
 */
class OfertaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'activa' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'vacantes' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => NULL, 'comment' => ''),
		'fecha_limite' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'empresa_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '4f6cbcc6-3950-482b-8656-08d6b2bb50bf',
			'titulo' => 'Lorem ipsum dolor sit amet',
			'activa' => 1,
			'created' => '2012-03-23 19:11:18',
			'modified' => '2012-03-23 19:11:18',
			'vacantes' => 1,
			'fecha_limite' => '2012-03-23',
			'empresa_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
