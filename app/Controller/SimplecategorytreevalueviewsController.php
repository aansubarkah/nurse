<?php
App::uses('AppController', 'Controller');
/**
 * Simplecategorytreevalueviews Controller
 *
 * @property Simplecategorytreevalueview $Simplecategorytreevalueview
 * @property PaginatorComponent $Paginator
 */
class SimplecategorytreevalueviewsController extends AppController {

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
		$this->Simplecategorytreevalueview->recursive = 0;
		$this->set('simplecategorytreevalueviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Simplecategorytreevalueview->exists($id)) {
			throw new NotFoundException(__('Invalid simplecategorytreevalueview'));
		}
		$options = array('conditions' => array('Simplecategorytreevalueview.' . $this->Simplecategorytreevalueview->primaryKey => $id));
		$this->set('simplecategorytreevalueview', $this->Simplecategorytreevalueview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Simplecategorytreevalueview->create();
			if ($this->Simplecategorytreevalueview->save($this->request->data)) {
				$this->Session->setFlash(__('The simplecategorytreevalueview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The simplecategorytreevalueview could not be saved. Please, try again.'));
			}
		}
		$categorytrees = $this->Simplecategorytreevalueview->Categorytree->find('list');
		$positions = $this->Simplecategorytreevalueview->Position->find('list');
		$positionlevels = $this->Simplecategorytreevalueview->Positionlevel->find('list');
		$values = $this->Simplecategorytreevalueview->Value->find('list');
		$sizes = $this->Simplecategorytreevalueview->Size->find('list');
		$this->set(compact('categorytrees', 'positions', 'positionlevels', 'values', 'sizes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Simplecategorytreevalueview->exists($id)) {
			throw new NotFoundException(__('Invalid simplecategorytreevalueview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Simplecategorytreevalueview->save($this->request->data)) {
				$this->Session->setFlash(__('The simplecategorytreevalueview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The simplecategorytreevalueview could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Simplecategorytreevalueview.' . $this->Simplecategorytreevalueview->primaryKey => $id));
			$this->request->data = $this->Simplecategorytreevalueview->find('first', $options);
		}
		$categorytrees = $this->Simplecategorytreevalueview->Categorytree->find('list');
		$positions = $this->Simplecategorytreevalueview->Position->find('list');
		$positionlevels = $this->Simplecategorytreevalueview->Positionlevel->find('list');
		$values = $this->Simplecategorytreevalueview->Value->find('list');
		$sizes = $this->Simplecategorytreevalueview->Size->find('list');
		$this->set(compact('categorytrees', 'positions', 'positionlevels', 'values', 'sizes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Simplecategorytreevalueview->id = $id;
		if (!$this->Simplecategorytreevalueview->exists()) {
			throw new NotFoundException(__('Invalid simplecategorytreevalueview'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Simplecategorytreevalueview->delete()) {
			$this->Session->setFlash(__('The simplecategorytreevalueview has been deleted.'));
		} else {
			$this->Session->setFlash(__('The simplecategorytreevalueview could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
