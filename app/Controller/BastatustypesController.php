<?php
App::uses('AppController', 'Controller');
/**
 * Bastatustypes Controller
 *
 * @property Bastatustype $Bastatustype
 */
class BastatustypesController extends AppController {

	public function isAuthorized($user) { 
        if (isset($user['role']) && $user['role'] == 'admin') { 
             return true; //Admin can access every action 
        } 
        if (isset($user['role']) && $user['role'] == 'user') { 
        	if (in_array($this->action, array('delete', 'add', 'edit'))) {
            	return false;
        	} else {
        		return true;
        	}
		}
        return false; // The rest don't 
    } 

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bastatustype->recursive = 0;
		$this->set('bastatustypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Bastatustype->id = $id;
		if (!$this->Bastatustype->exists()) {
			throw new NotFoundException(__('Invalid bastatustype'));
		}
		$this->Bastatustype->recursive = 2;
		$this->set('bastatustype', $this->Bastatustype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bastatustype->create();
			if ($this->Bastatustype->save($this->request->data)) {
				$this->Session->setFlash(__('The bastatustype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bastatustype could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Bastatustype->id = $id;
		if (!$this->Bastatustype->exists()) {
			throw new NotFoundException(__('Invalid bastatustype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bastatustype->save($this->request->data)) {
				$this->Session->setFlash(__('The bastatustype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bastatustype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bastatustype->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bastatustype->id = $id;
		if (!$this->Bastatustype->exists()) {
			throw new NotFoundException(__('Invalid bastatustype'));
		}
		if ($this->Bastatustype->delete()) {
			$this->Session->setFlash(__('Bastatustype deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bastatustype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
