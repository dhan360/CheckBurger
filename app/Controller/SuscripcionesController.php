<?php
App::uses('AppController', 'Controller');
/**
 * Suscripciones Controller
 *
 * @property Suscripcione $Suscripcione
 * @property PaginatorComponent $Paginator
 */
class SuscripcionesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Suscripcione->recursive = 0;
		$this->set('suscripciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Suscripcione->exists($id)) {
			throw new NotFoundException(__('Invalid suscripcione'));
		}
		$options = array('conditions' => array('Suscripcione.' . $this->Suscripcione->primaryKey => $id));
		$this->set('suscripcione', $this->Suscripcione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Suscripcione->create();
			if ($this->Suscripcione->save($this->request->data)) {
				$this->Flash->success(__('The suscripcione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The suscripcione could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Suscripcione->exists($id)) {
			throw new NotFoundException(__('Invalid suscripcione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Suscripcione->save($this->request->data)) {
				$this->Flash->success(__('The suscripcione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The suscripcione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Suscripcione.' . $this->Suscripcione->primaryKey => $id));
			$this->request->data = $this->Suscripcione->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Suscripcione->id = $id;
		if (!$this->Suscripcione->exists()) {
			throw new NotFoundException(__('Invalid suscripcione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Suscripcione->delete()) {
			$this->Flash->success(__('The suscripcione has been deleted.'));
		} else {
			$this->Flash->error(__('The suscripcione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
