<?php
App::uses('AppController', 'Controller');
/**
 * DetallePedidos Controller
 *
 * @property DetallePedido $DetallePedido
 * @property PaginatorComponent $Paginator
 */
class DetallePedidosController extends AppController {

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
		$this->DetallePedido->recursive = 0;
		$this->set('detallePedidos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetallePedido->exists($id)) {
			throw new NotFoundException(__('Invalid detalle pedido'));
		}
		$options = array('conditions' => array('DetallePedido.' . $this->DetallePedido->primaryKey => $id));
		$this->set('detallePedido', $this->DetallePedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetallePedido->create();
			if ($this->DetallePedido->save($this->request->data)) {
				$this->Flash->success(__('The detalle pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The detalle pedido could not be saved. Please, try again.'));
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
		if (!$this->DetallePedido->exists($id)) {
			throw new NotFoundException(__('Invalid detalle pedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DetallePedido->save($this->request->data)) {
				$this->Flash->success(__('The detalle pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The detalle pedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetallePedido.' . $this->DetallePedido->primaryKey => $id));
			$this->request->data = $this->DetallePedido->find('first', $options);
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
		$this->DetallePedido->id = $id;
		if (!$this->DetallePedido->exists()) {
			throw new NotFoundException(__('Invalid detalle pedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DetallePedido->delete()) {
			$this->Flash->success(__('The detalle pedido has been deleted.'));
		} else {
			$this->Flash->error(__('The detalle pedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
