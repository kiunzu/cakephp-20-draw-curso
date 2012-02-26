<?php
/* Ofertas Test cases generated on: 2012-02-25 22:27:41 : 1330205261*/
App::uses('OfertasController', 'Controller');

/**
 * TestOfertasController *
 */
class TestOfertasController extends OfertasController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * OfertasController Test Case
 *
 */
class OfertasControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.oferta', 'app.foco', 'app.alumno', 'app.alumnos_foco', 'app.focos_oferta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ofertas = new TestOfertasController();
		$this->Ofertas->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ofertas);

		parent::tearDown();
	}

}
