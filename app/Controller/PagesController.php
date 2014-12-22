<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License *
 *
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 * @property User $User
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$this->view = "home";
		$title_for_layout = "Beranda";
		$pengguna = $this->checkIfProfileComplete();
		$this->set(compact('title_for_layout', 'pengguna'));
	}

	private function checkIfProfileComplete() {
		$userId = $this->Auth->user('id');
		$arrReturn = array();

		$this->loadModel('User');
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

		//check user
		//$user = $this->User->find('first', array(
		$arrReturn = $this->User->find('first', array(
			'recursive' => 1,
			'conditions' => array(
				'User.id' => $userId,
				'User.active' => 1
			)
		));
/*
		if(empty($user['User']['number'])) $arrReturn[] = 'NIP belum diisi';
		if(empty($user['User']['cardnumber'])) $arrReturn[] = 'No Karpeg belum diisi';
		if(empty($user['User']['fullname'])) $arrReturn[] = 'Nama Lengkap belum diisi';
*/
		//check user level

		return $arrReturn;
	}
/*
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
*/
}
