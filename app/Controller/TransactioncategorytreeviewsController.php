<?php
App::uses('AppController', 'Controller');
/**
 * Transactioncategorytreeviews Controller
 *
 * @property Transactioncategorytreeview $Transactioncategorytreeview
 * @property PaginatorComponent $Paginator
 */
class TransactioncategorytreeviewsController extends AppController {

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
		$this->Transactioncategorytreeview->recursive = 0;
		$this->set('transactioncategorytreeviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transactioncategorytreeview->exists($id)) {
			throw new NotFoundException(__('Invalid transactioncategorytreeview'));
		}
		$options = array('conditions' => array('Transactioncategorytreeview.' . $this->Transactioncategorytreeview->primaryKey => $id));
		$this->set('transactioncategorytreeview', $this->Transactioncategorytreeview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transactioncategorytreeview->create();
			if ($this->Transactioncategorytreeview->save($this->request->data)) {
				$this->Session->setFlash(__('The transactioncategorytreeview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transactioncategorytreeview could not be saved. Please, try again.'));
			}
		}
		$activities = $this->Transactioncategorytreeview->Activity->find('list');
		$categorytrees = $this->Transactioncategorytreeview->Categorytree->find('list');
		$categorytreeparents = $this->Transactioncategorytreeview->Categorytreeparent->find('list');
		$users = $this->Transactioncategorytreeview->User->find('list');
		$values = $this->Transactioncategorytreeview->Value->find('list');
		$this->set(compact('activities', 'categorytrees', 'categorytreeparents', 'users', 'values'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Transactioncategorytreeview->exists($id)) {
			throw new NotFoundException(__('Invalid transactioncategorytreeview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transactioncategorytreeview->save($this->request->data)) {
				$this->Session->setFlash(__('The transactioncategorytreeview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transactioncategorytreeview could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transactioncategorytreeview.' . $this->Transactioncategorytreeview->primaryKey => $id));
			$this->request->data = $this->Transactioncategorytreeview->find('first', $options);
		}
		$activities = $this->Transactioncategorytreeview->Activity->find('list');
		$categorytrees = $this->Transactioncategorytreeview->Categorytree->find('list');
		$categorytreeparents = $this->Transactioncategorytreeview->Categorytreeparent->find('list');
		$users = $this->Transactioncategorytreeview->User->find('list');
		$values = $this->Transactioncategorytreeview->Value->find('list');
		$this->set(compact('activities', 'categorytrees', 'categorytreeparents', 'users', 'values'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Transactioncategorytreeview->id = $id;
		if (!$this->Transactioncategorytreeview->exists()) {
			throw new NotFoundException(__('Invalid transactioncategorytreeview'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transactioncategorytreeview->delete()) {
			$this->Session->setFlash(__('The transactioncategorytreeview has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transactioncategorytreeview could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
