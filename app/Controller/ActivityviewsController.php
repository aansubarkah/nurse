<?php
App::uses('AppController', 'Controller');
/**
 * Activityviews Controller
 *
 * @property Activityview $Activityview
 * @property PaginatorComponent $Paginator
 */
class ActivityviewsController extends AppController {

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
		$this->Activityview->recursive = 0;
		$this->set('activityviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Activityview->exists($id)) {
			throw new NotFoundException(__('Invalid activityview'));
		}
		$options = array('conditions' => array('Activityview.' . $this->Activityview->primaryKey => $id));
		$this->set('activityview', $this->Activityview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Activityview->create();
			if ($this->Activityview->save($this->request->data)) {
				$this->Session->setFlash(__('The activityview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activityview could not be saved. Please, try again.'));
			}
		}
		$categorytrees = $this->Activityview->Categorytree->find('list');
		$values = $this->Activityview->Value->find('list');
		$categorytreeparents = $this->Activityview->Categorytreeparent->find('list');
		$categories = $this->Activityview->Category->find('list');
		$positions = $this->Activityview->Position->find('list');
		$this->set(compact('categorytrees', 'values', 'categorytreeparents', 'categories', 'positions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Activityview->exists($id)) {
			throw new NotFoundException(__('Invalid activityview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Activityview->save($this->request->data)) {
				$this->Session->setFlash(__('The activityview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activityview could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Activityview.' . $this->Activityview->primaryKey => $id));
			$this->request->data = $this->Activityview->find('first', $options);
		}
		$categorytrees = $this->Activityview->Categorytree->find('list');
		$values = $this->Activityview->Value->find('list');
		$categorytreeparents = $this->Activityview->Categorytreeparent->find('list');
		$categories = $this->Activityview->Category->find('list');
		$positions = $this->Activityview->Position->find('list');
		$this->set(compact('categorytrees', 'values', 'categorytreeparents', 'categories', 'positions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Activityview->id = $id;
		if (!$this->Activityview->exists()) {
			throw new NotFoundException(__('Invalid activityview'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Activityview->delete()) {
			$this->Session->setFlash(__('The activityview has been deleted.'));
		} else {
			$this->Session->setFlash(__('The activityview could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
