<?php
App::uses('AppController', 'Controller');
CakePlugin::load('Filter');
/**
 * Bizassists Controller
 *
 * @property Bizassist $Bizassist
 */
class BizassistsController extends AppController {

    public $components = array('RequestHandler', 'Filter.Filter');  
    public $filters = array  
        (  
            'index' => array  
            (  
                'Bizassist' => array  
                (  
                    'Bizassist.iNetID' => array('label' => 'iNet ID'),  
                    'Bizassist.title',  
                    'Company.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Company', 
                    	'filterField' => 'Bizassist.company_id',
	                    'selectOptions' => array  
	                    (
                    	'order' => 'Company.title ASC'
                    	)
                    ),                      
                    'Bastatustype.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Status', 
                    	'filterField' => 'Bizassist.bastatustype_id'
                    ),
                    'Agent.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Agent', 
                    	'filterField' => 'Bizassist.agent_id'
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
		//$this->Bizassist->recursive = 0;
		$this->set('bizassists', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->disableCache();
		$this->Bizassist->id = $id;
		if (!$this->Bizassist->exists()) {
			throw new NotFoundException(__('Invalid bizassist'));
		}
		//$this->Bizassist->recursive = 2;
		$this->Bizassist->contain('Company', 'Bastatustype', 'Agent', 'Output', 'Output.Optype', 'Output.Opstatustype');
		
		$this->set('quickview', false);
		$this->set('bizassist', $this->Bizassist->read(null, $id));
		//$this->set('bizassist', $this->Bizassist->findById($id));
		//$this->set('bizassist', $this->Bizassist->find('first', array('conditions' => array('Bizassist.Id' => $id),
		//															  'contain' => array('Company', 'Bastatustype', 'Agent', 'Output', 'Output.Optype', 'Output.Opstatustype')
		//															)));
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
		$this->disableCache();
		if ($this->request->is('post')) {
			$this->Bizassist->create();
			if ($this->Bizassist->save($this->request->data)) {
				$this->Session->setFlash(__('The bizassist has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The bizassist could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Bizassist->Company->find('list', array('order' => array('Company.title')));
		$bastatustypes = $this->Bizassist->Bastatustype->find('list');
		$agents = $this->Bizassist->Agent->find('list');
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
		$this->Bizassist->id = $id;
		if (!$this->Bizassist->exists()) {
			throw new NotFoundException(__('Invalid bizassist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bizassist->save($this->request->data)) {
				$this->Session->setFlash(__('The bizassist has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The bizassist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bizassist->read(null, $id);
		}
		$companies = $this->Bizassist->Company->find('list', array('order' => array('Company.title')));
		$bastatustypes = $this->Bizassist->Bastatustype->find('list');
		$agents = $this->Bizassist->Agent->find('list');
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
		$this->Bizassist->id = $id;
		if (!$this->Bizassist->exists()) {
			throw new NotFoundException(__('Invalid bizassist'));
		}
		if ($this->Bizassist->delete()) {
			$this->Session->setFlash(__('Bizassist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bizassist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
