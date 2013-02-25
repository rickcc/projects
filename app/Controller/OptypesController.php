<?php
App::uses('AppController', 'Controller');
/**
 * Optypes Controller
 *
 * @property Optype $Optype
 */
class OptypesController extends AppController {

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
		$this->Optype->recursive = 0;
		$this->set('optypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Optype->id = $id;
		if (!$this->Optype->exists()) {
			throw new NotFoundException(__('Invalid optype'));
		}
		$this->Optype->recursive = 2;
		$this->set('optype', $this->Optype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Optype->create();
			if ($this->Optype->save($this->request->data)) {
				$this->Session->setFlash(__('The optype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The optype could not be saved. Please, try again.'));
			}
		}
		$this->render('edit');
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Optype->id = $id;
		if (!$this->Optype->exists()) {
			throw new NotFoundException(__('Invalid optype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Optype->save($this->request->data)) {
				$this->Session->setFlash(__('The optype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The optype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Optype->read(null, $id);
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
		$this->Optype->id = $id;
		if (!$this->Optype->exists()) {
			throw new NotFoundException(__('Invalid optype'));
		}
		if ($this->Optype->delete()) {
			$this->Session->setFlash(__('Optype deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Optype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
