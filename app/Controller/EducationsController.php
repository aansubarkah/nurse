<?php
App::uses('AppController', 'Controller');
/**
 * Educations Controller
 *
 * @property Education $Education
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EducationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function fullNameSuggest()
	{
		if (!empty($this->request->query['q'])) {
			$q = trim(strtolower($this->request->query['q']));
			$q = '%' . $q . '%';
			$posts = $this->Education->find('all', array(
				'recursive' => -1,
				'conditions' => array(
					'Education.active' => 1,
					'LOWER(Education.description) LIKE' => $q
				),
				'order' => array('Education.description' => 'ASC'),
				'fields' => array('Education.id', 'Education.description'),
				'limit' => 10
			));

			$data = array();
			$i = 0;
			foreach ($posts as $post) {
				$data[$i]['id'] = $post['Education']['id'];
				$data[$i]['name'] = $post['Education']['description'];
				$i++;
			}
		}

		$this->set(compact('data'));
		$this->set('_serialize', 'data');
	}

}
