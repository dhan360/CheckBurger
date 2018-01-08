<?php
App::uses('AppController', 'Controller');
/**
 * DetalleCombos Controller
 *
 * @property DetalleCombo $DetalleCombo
 * @property PaginatorComponent $Paginator
 */
class DetalleCombosController extends AppController {

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
		$this->DetalleCombo->recursive = 0;
		$this->set('detalleCombos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleCombo->exists($id)) {
			throw new NotFoundException(__('Invalid detalle combo'));
		}
		$options = array('conditions' => array('DetalleCombo.' . $this->DetalleCombo->primaryKey => $id));
		$this->set('detalleCombo', $this->DetalleCombo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleCombo->create();
			if ($this->DetalleCombo->save($this->request->data)) {
				$this->Flash->success(__('The detalle combo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The detalle combo could not be saved. Please, try again.'));
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
		if (!$this->DetalleCombo->exists($id)) {
			throw new NotFoundException(__('Invalid detalle combo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DetalleCombo->save($this->request->data)) {
				$this->Flash->success(__('The detalle combo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The detalle combo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleCombo.' . $this->DetalleCombo->primaryKey => $id));
			$this->request->data = $this->DetalleCombo->find('first', $options);
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
		$this->DetalleCombo->id = $id;
		if (!$this->DetalleCombo->exists()) {
			throw new NotFoundException(__('Invalid detalle combo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DetalleCombo->delete()) {
			$this->Flash->success(__('The detalle combo has been deleted.'));
		} else {
			$this->Flash->error(__('The detalle combo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
