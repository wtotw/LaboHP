<?php

class UserController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = array('user', 'study');

	public function index() {
		$json = $this->params['url']['json'];
		$data = json_decode($json);
		$where = $data['where'];
		debug($where);

		$this->set('users', $this->User->find('all', array('conditions' => $where)));
		$this->set('title_for_layout', '研究者一覧');
	}

	public function view($id = null) {
		$this->User->id = $id;
		$this->set('user', $this->User->read());
	}

	public function add() {
		if($this->request->is('post')) {
			if($this->User->save($this->request->data)) {
				$this->Session('success!');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('failed...');
			}
		}
	}
}