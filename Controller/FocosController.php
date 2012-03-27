<?php
App::uses('AppController', 'Controller');
/**
 * Focos Controller
 *
 * @property Foco $Foco
 */
class FocosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Foco->recursive = 0;
		$this->set('focos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Foco->id = $id;
		if (!$this->Foco->exists()) {
			throw new NotFoundException(__('Invalid foco'));
		}
		$this->set('foco', $this->Foco->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Foco->create();
			if ($this->Foco->save($this->request->data)) {
				$this->Session->setFlash(__('The foco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foco could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->Foco->Alumno->find('list');
		$ofertas = $this->Foco->Ofertum->find('list');
		$this->set(compact('alumnos', 'ofertas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Foco->id = $id;
		if (!$this->Foco->exists()) {
			throw new NotFoundException(__('Invalid foco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Foco->save($this->request->data)) {
				$this->Session->setFlash(__('The foco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foco could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Foco->read(null, $id);
		}
		$alumnos = $this->Foco->Alumno->find('list');
		$ofertas = $this->Foco->Ofertum->find('list');
		$this->set(compact('alumnos', 'ofertas'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Foco->id = $id;
		if (!$this->Foco->exists()) {
			throw new NotFoundException(__('Invalid foco'));
		}
		if ($this->Foco->delete()) {
			$this->Session->setFlash(__('Foco deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Foco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Foco->recursive = 0;
		$this->set('focos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Foco->id = $id;
		if (!$this->Foco->exists()) {
			throw new NotFoundException(__('Invalid foco'));
		}
		$this->set('foco', $this->Foco->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Foco->create();
			if ($this->Foco->save($this->request->data)) {
				$this->Session->setFlash(__('The foco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foco could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->Foco->Alumno->find('list');
		$ofertas = $this->Foco->Ofertum->find('list');
		$this->set(compact('alumnos', 'ofertas'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Foco->id = $id;
		if (!$this->Foco->exists()) {
			throw new NotFoundException(__('Invalid foco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Foco->save($this->request->data)) {
				$this->Session->setFlash(__('The foco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foco could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Foco->read(null, $id);
		}
		$alumnos = $this->Foco->Alumno->find('list');
		$ofertas = $this->Foco->Ofertum->find('list');
		$this->set(compact('alumnos', 'ofertas'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Foco->id = $id;
		if (!$this->Foco->exists()) {
			throw new NotFoundException(__('Invalid foco'));
		}
		if ($this->Foco->delete()) {
			$this->Session->setFlash(__('Foco deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Foco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
