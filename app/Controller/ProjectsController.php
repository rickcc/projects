<?php
App::uses('AppController', 'Controller');
CakePlugin::load('Filter');
/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {

    public $components = array('Filter.Filter');  
    public $filters = array  
        (  
            'index' => array  
            (  
                'Project' => array  
                (  
                    'Project.iNetID' => array('label' => 'iNet ID'),  
                    'Project.title',  
                    'Company.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Company', 
                    	'filterField' => 'Project.company_id',
	                    'selectOptions' => array  
	                    (
                    	'order' => 'Company.title ASC'
                    	)
                    ),                      
                    'Bastatustype.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Status', 
                    	'filterField' => 'Project.bastatustype_id'
                    ),
                    'Agent.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Agent', 
                    	'filterField' => 'Project.agent_id'
                    )                      
                )  
            )  
        );  

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->disableCache();
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->disableCache();
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->Project->recursive = 2;
		$this->set('quickview', false);
		$this->set('project', $this->Project->read(null, $id));
	}

	public function quickview($id = null) {
		$this->view($id);
		$this->set('quickview', true);
		$this->render('view');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Project->Company->find('list', array('order' => array('Company.title')));
		$bastatustypes = $this->Project->Bastatustype->find('list');
		$agents = $this->Project->Agent->find('list');
		$this->set(compact('companies', 'bastatustypes', 'agents'));
		$this->render('edit');
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->disableCache();
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Project->read(null, $id);
		}
		$companies = $this->Project->Company->find('list', array('order' => array('Company.title')));
		$bastatustypes = $this->Project->Bastatustype->find('list');
		$agents = $this->Project->Agent->find('list');
		$this->set(compact('companies', 'bastatustypes', 'agents'));
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
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->Project->delete($id,true)) {
			$this->Session->setFlash(__('Project deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Project was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
