<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * Breadcrumb for all
     *
     * @var array
     */
    private $breadCrumb = array(
        0 => array(
            'title'         => 'Profil',
            'controller'    => 'users',
            'action'    => '/'
        )
    );


    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $breadCrumb = $this->breadCrumb;
        $breadCrumb[1] = array(
            'title'         => 'Ringkasan',
            'controller'    => 'users',
            'action'    => '/'
        );

        $this->layout = 'profile';

        if (!empty($this->Auth->user('fullname'))) {
            $title_for_layout = $this->Auth->user('fullname');
        } else {
            $title_for_layout = 'Profil';
        }

        $this->User->unbindModel(array(
            'belongsTo' => array('Group'),
            'hasMany' => array(
                'Chief', 'Evaluation',
                'Transactioncategorytreeview', 'Transaction'
            ),
            'hasAndBelongsToMany' => array(
                'Period'
            )
        ));

        $user = $this->User->find('first', array(
            'recursive' => -1,
            'conditions' => array(
                'User.id' => $this->Auth->user('id'),
                'User.active' => 1
            )
        ));

        $positionLevel = $this->User->UsersPositionlevel->find('first', array(
            'recursive' => 0,
            'order' => array('UsersPositionlevel.start DESC'),
            'conditions' => array(
                'UsersPositionlevel.user_id' => $this->Auth->user('id'),
                'UsersPositionlevel.active' => 1
            )
        ));

        $this->set(compact('title_for_layout', 'breadCrumb', 'user', 'positionLevel'));
    }

    public function basicinfo() {
        $breadCrumb = $this->breadCrumb;
        $breadCrumb[1] = array(
            'title'         => 'Informasi Dasar',
            'controller'    => 'users',
            'action'    => 'basicinfo'
        );

        $this->layout = 'profile';
    }

    public function password() {
        $breadCrumb = $this->breadCrumb;
        $breadCrumb[1] = array(
            'title'         => 'Ubah Password',
            'controller'    => 'users',
            'action'    => 'password'
        );

        $this->layout = 'profile';

        $title_for_layout = 'Ubah Password';

        $this->set(compact('title_for_layout', 'breadCrumb'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        $this->layout = 'blank';
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
    public function edit($id = null)
    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $groups = $this->User->Group->find('list');
        $departements = $this->User->Departement->find('list');
        $levels = $this->User->Level->find('list');
        $periods = $this->User->Period->find('list');
        $positionlevels = $this->User->Positionlevel->find('list');
        $positions = $this->User->Position->find('list');
        $this->set(compact('groups', 'departements', 'levels', 'periods', 'positionlevels', 'positions'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    /**
     * login method
     *
     * @return void
     */
    public function login()
    {
        $this->layout = 'blank';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Username atau Password Keliru.'));
        }
    }

    /**
     * logout method
     *
     * @return void
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
