<?php
App::uses('AppController', 'Controller');
/**
 * Categorytreevalueviews Controller
 *
 * @property Categorytreevalueview $Categorytreevalueview
 * @property PaginatorComponent $Paginator
 */
class CategorytreevalueviewsController extends AppController {

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
		$this->Categorytreevalueview->recursive = 0;
		$this->set('categorytreevalueviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categorytreevalueview->exists($id)) {
			throw new NotFoundException(__('Invalid categorytreevalueview'));
		}
		$options = array('conditions' => array('Categorytreevalueview.' . $this->Categorytreevalueview->primaryKey => $id));
		$this->set('categorytreevalueview', $this->Categorytreevalueview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categorytreevalueview->create();
			if ($this->Categorytreevalueview->save($this->request->data)) {
				$this->Session->setFlash(__('The categorytreevalueview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorytreevalueview could not be saved. Please, try again.'));
			}
		}
		$categorytreeparents = $this->Categorytreevalueview->Categorytreeparent->find('list');
		$categories = $this->Categorytreevalueview->Category->find('list');
		$categorytreepositions = $this->Categorytreevalueview->Categorytreeposition->find('list');
		$positionlevels = $this->Categorytreevalueview->Positionlevel->find('list');
		$values = $this->Categorytreevalueview->Value->find('list');
		$sizes = $this->Categorytreevalueview->Size->find('list');
		$this->set(compact('categorytreeparents', 'categories', 'categorytreepositions', 'positionlevels', 'values', 'sizes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Categorytreevalueview->exists($id)) {
			throw new NotFoundException(__('Invalid categorytreevalueview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categorytreevalueview->save($this->request->data)) {
				$this->Session->setFlash(__('The categorytreevalueview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorytreevalueview could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Categorytreevalueview.' . $this->Categorytreevalueview->primaryKey => $id));
			$this->request->data = $this->Categorytreevalueview->find('first', $options);
		}
		$categorytreeparents = $this->Categorytreevalueview->Categorytreeparent->find('list');
		$categories = $this->Categorytreevalueview->Category->find('list');
		$categorytreepositions = $this->Categorytreevalueview->Categorytreeposition->find('list');
		$positionlevels = $this->Categorytreevalueview->Positionlevel->find('list');
		$values = $this->Categorytreevalueview->Value->find('list');
		$sizes = $this->Categorytreevalueview->Size->find('list');
		$this->set(compact('categorytreeparents', 'categories', 'categorytreepositions', 'positionlevels', 'values', 'sizes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Categorytreevalueview->id = $id;
		if (!$this->Categorytreevalueview->exists()) {
			throw new NotFoundException(__('Invalid categorytreevalueview'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Categorytreevalueview->delete()) {
			$this->Session->setFlash(__('The categorytreevalueview has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categorytreevalueview could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
