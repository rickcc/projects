<?php
App::uses('AppController', 'Controller');
/**
 * Opstatustypes Controller
 *
 * @property Opstatustype $Opstatustype
 */
class OpstatustypesController extends AppController {

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
		$this->Opstatustype->recursive = 0;
		$this->set('opstatustypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Opstatustype->id = $id;
		if (!$this->Opstatustype->exists()) {
			throw new NotFoundException(__('Invalid opstatustype'));
		}
		$this->Opstatustype->recursive = 2;
		$this->set('opstatustype', $this->Opstatustype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Opstatustype->create();
			if ($this->Opstatustype->save($this->request->data)) {
				$this->Session->setFlash(__('The opstatustype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The opstatustype could not be saved. Please, try again.'));
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
		$this->Opstatustype->id = $id;
		if (!$this->Opstatustype->exists()) {
			throw new NotFoundException(__('Invalid opstatustype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Opstatustype->save($this->request->data)) {
				$this->Session->setFlash(__('The opstatustype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The opstatustype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Opstatustype->read(null, $id);
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
		$this->Opstatustype->id = $id;
		if (!$this->Opstatustype->exists()) {
			throw new NotFoundException(__('Invalid opstatustype'));
		}
		if ($this->Opstatustype->delete()) {
			$this->Session->setFlash(__('Opstatustype deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Opstatustype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
