<?php
//App::uses('AppController', 'Controller');
CakePlugin::load('Filter');
/**
 * Companies Controller
 *
 * @property Company $Company
 */
class CompaniesController extends AppController {

    public $components = array('Filter.Filter');  
    public $filters = array  
        (  
            'index' => array  
            (  
                'Company' => array  
                (  
                    'Company.iNetID' => array('label' => 'iNet ID'),  
                    'Company.title',  
                    'Company.address',  
                    'Agent.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Agent', 
                    	'filterField' => 'Company.agent_id'
                    /*),  
                    'Company.westernPeninsula' => array  
                    (  
                        'type' => 'select',  
                        'label' => 'Western Peninsula',
                        'selectOptions' => array
                        (
                        	'empty' => 'All',
                        	'options' => array('Yes', 'No')
                        )
                        //'type' => 'select',  
                        //'label' => 'Document owner',  
                        //'selector' => 'getOwnerList'  
                    */)
                )  
            )  
        );  

/**
 * index method
 *
 * @return void
 */
	public function index($export = null) {
		//$this->Company->recursive = 0;
		$this->Company->contain('Bizassist', 'Project', 'Agent', 'Bareport', 'Bareport.Agent', 
								'Bizassist.Bastatustype',  
								'Project.Bastatustype');
		if ($export=="find2BA") {
   			 $this->paginate = array(
 			       'limit' => 10//,
// 			       'conditions' => array('COUNT(Bizassist.id) > 1')
			    );
			$this->set('companies', $this->paginate());
		} else {
			$this->set('companies', $this->paginate());
		}
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		//$this->Company->recursive = 2;
		$this->Company->contain('Bizassist', 'Project', 'Agent', 'Bareport', 'Bareport.Agent', 
								'Bizassist.Bastatustype', 'Bizassist.Agent', 'Bizassist.Output', 
								'Project.Bastatustype', 'Project.Agent', 'Project.Output');
		$this->set('company', $this->Company->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
		$agents = $this->Company->Agent->find('list');
		$this->set(compact('agents'));
		$this->render('edit');
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Company->read(null, $id);
		}
		$agents = $this->Company->Agent->find('list');
		$this->set(compact('agents'));
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
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('Company deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * add method
 *
 * @return void
 */
	public function addba($company_id = null) {
		$this->Company->id = $company_id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Company->Bizassist->create();
			if ($this->Company->Bizassist->save($this->request->data)) {
				$this->Session->setFlash(__('The BA has been saved'));
				$bizassist_id = $this->Company->Bizassist->id;
				
				if ($this->request->data['Company']['gotEngagement']) {

					// Create an engagement output
					$output = array();
					$output['Output']['bizassist_id'] = $bizassist_id;
					$output['Output']['enabled'] = true;  
					$output['Output']['quantity'] = 1;  
					$output['Output']['opstatustype_id'] = 3;  // Forecast  
					if ($this->request->data['Company']['evidenceOnFile']) {
						$output['Output']['opstatustype_id'] = 4;  // Actual  
					}
					$output['Output']['actionDate'] = $this->request->data['Company']['actionDate'];   
					$output['Output']['evidenceOnFile'] = $this->request->data['Company']['evidenceOnFile'];   
					$output['Output']['evidenceDate'] = $this->request->data['Company']['evidenceDate'];   
					
					//echo debug($output);
					
					// Set flash message in advance - will be overwritten in case of errors
					$this->Session->setFlash(__('The BizAssist Form has been processed and saved'));

					$output['Output']['optype_id'] = 11;  // Biz Engagement Form
					
					$this->Company->Bizassist->Output->create();
					if (!$this->Company->Bizassist->Output->save($output)) {
						$this->Session->setFlash(__('Error Processing Form'));
					}
					
					if ($this->request->data['Company']['newCompanyInNetwork']) {
						
						$output['Output']['optype_id'] = 7;  // New Co in Network

						$this->Company->Bizassist->Output->create();
						if (!$this->Company->Bizassist->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
				
					if ($this->request->data['Company']['newCompanyInRegion']) {
						
						$output['Output']['optype_id'] = 13;  // New Co in Region

						$this->Company->Bizassist->Output->create();
						if (!$this->Company->Bizassist->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
				
					if ($this->request->data['Company']['envCompany']) {
						
						$output['Output']['optype_id'] = 14;  // Env Company

						$this->Company->Bizassist->Output->create();
						if (!$this->Company->Bizassist->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}

					// Finally add an evidence form for a date in the future
					$output['Output']['optype_id'] = 12;  		// Evidence Form
					$output['Output']['opstatustype_id'] = 3;  	// Forecast
					$actionDate = $this->request->data['Company']['actionDate'];  
					$actionDate['month'] += 6;
					if ($actionDate['month'] > 12) {
						$actionDate['month'] -= 6;
						$actionDate['year'] += 1;
					}
					$output['Output']['actionDate'] = $actionDate;   
					$output['Output']['evidenceOnFile'] = '';   
					$output['Output']['evidenceDate'] = '';   

					$this->Company->Bizassist->Output->create();
					if (!$this->Company->Bizassist->Output->save($output)) {
						$this->Session->setFlash(__('Error Processing Form'));
					}
				

				}
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The BA could not be saved. Please, try again.'));
			}
		}
		$this->request->data = $this->Company->findById($company_id);
		$bastatustypes = $this->Company->Bizassist->Bastatustype->find('list');
		$opstatustypes = $this->Company->Bizassist->Output->Opstatustype->find('list');
		$agents = $this->Company->Agent->find('list');
		$this->set(compact('agents', 'bastatustypes', 'opstatustypes'));
	}

	public function addproj($company_id = null) {
		$this->Company->id = $company_id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Company->Project->create();
			if ($this->Company->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The Project has been saved'));
				$Project_id = $this->Company->Project->id;
				
				// Create a basic output
				$output = array();
				$output['Output']['project_id'] = $Project_id;
				$output['Output']['enabled'] = true;  
				$output['Output']['quantity'] = 1;  
				$output['Output']['opstatustype_id'] = 3;  // Forecast  
				$actionDate = $this->request->data['Company']['actionDate'];  
				$actionDate['year'] += 1;				// Default outputs expected in a year
				$output['Output']['actionDate'] = $actionDate;   
					
				//echo debug($output);
					
				// Set flash message in advance - will be overwritten in case of errors
				$this->Session->setFlash(__('The Project Form has been processed and saved'));

				if ($this->request->data['Company']['gotEvaluation']) {

					if ($this->request->data['Company']['newJobs'] > 0) {
						$output['Output']['optype_id'] = 3;  // New Jobs					
						$output['Output']['quantity'] = $this->request->data['Company']['newJobs'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
					if ($this->request->data['Company']['newRJobs'] > 0) {
						$output['Output']['optype_id'] = 5;  // New Research Jobs					
						$output['Output']['quantity'] = $this->request->data['Company']['newRJobs'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
					if ($this->request->data['Company']['sgJobs'] > 0) {
						$output['Output']['optype_id'] = 4;  // SG Jobs					
						$output['Output']['quantity'] = $this->request->data['Company']['sgJobs'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
					if ($this->request->data['Company']['sgRJobs'] > 0) {
						$output['Output']['optype_id'] = 6;  // SG Research Jobs					
						$output['Output']['quantity'] = $this->request->data['Company']['sgRJobs'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
					if ($this->request->data['Company']['newProducts'] > 0) {
						$output['Output']['optype_id'] = 9;  // New Jobs					
						$output['Output']['quantity'] = $this->request->data['Company']['newProducts'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
					if ($this->request->data['Company']['iprUsed'] > 0) {
						$output['Output']['optype_id'] = 8;  // Patents etc					
						$output['Output']['quantity'] = $this->request->data['Company']['iprUsed'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
					if ($this->request->data['Company']['increasedGVA'] > 0) {
						$output['Output']['optype_id'] = 10;  // GVA					
						$output['Output']['quantity'] = $this->request->data['Company']['increasedGVA'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
					if ($this->request->data['Company']['collabBiz'] > 0) {
						$output['Output']['optype_id'] = 15;  // HEI Collaboration					
						$output['Output']['quantity'] = $this->request->data['Company']['collabBiz'];  					
						$this->Company->Project->Output->create();
						if (!$this->Company->Project->Output->save($output)) {
							$this->Session->setFlash(__('Error Processing Form'));
						}
					}
					
				}
				
				if ($this->request->data['Company']['hadSRB']) {

					$output['Output']['optype_id'] = 16;  // SRB
					$output['Output']['opstatustype_id'] = 4;  // Actual  
					$output['Output']['actionDate'] = $this->request->data['Company']['srbDate'];  
					$output['Output']['evidenceOnFile'] = true;  
					$output['Output']['evidenceDate'] = $this->request->data['Company']['srbDate'];  

					$this->Company->Project->Output->create();
					if (!$this->Company->Project->Output->save($output)) {
						$this->Session->setFlash(__('Error Processing Form'));
					}
				}
				
				
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The Project could not be saved. Please, try again.'));
			}
		}
		$this->request->data = $this->Company->findById($company_id);
		$bastatustypes = $this->Company->Bizassist->Bastatustype->find('list');
		$opstatustypes = $this->Company->Bizassist->Output->Opstatustype->find('list');
		$agents = $this->Company->Agent->find('list');
		$this->set(compact('agents', 'bastatustypes', 'opstatustypes'));
	}


/**
 * findInBizAssist method
 *
 * @param string $id
 * @return array
 */
 	public function findInBizAssist($opId = -1, $company_id = -1, $type = 'Actual') {
 			
 		$conditions = array(	'Bizassist.company_id' => $company_id, 
								'Bizassist.enabled' => true,
								'Output.enabled' => true,
								'Optype.id' => $opId, 
								'Opstatustype.title LIKE' => $type
 						);

		if ($type == 'Actual') {
			$conditions['Output.evidenceOnFile'] = true;
		}
 						
 		$op1 = $this->Company->Bizassist->Output->find('all', array('conditions' => $conditions));
					
		return $op1;
 	}
 	
/**
 * existsInBizAssist method
 *
 * @param string $id
 * @return bool
 */
 	public function existsInBizAssist($opId = -1, $company_id = -1, $type = 'Actual') {
 		
 		$op1 = $this->findInBizAssist($opId, $company_id, $type);
 		if (empty($op1)) {
 			return false;
		}
		return true;
	}
	
/**
 * qtyInBAorProject method
 *
 * @param string $id
 * @return int
 */
	public function qtyInBAorProject($opId = -1, $company_id = -1, $type = '%') {
			
		$conditions = array(	'Bizassist.company_id' => $company_id, 
								'Bizassist.enabled' => true,
								'Output.enabled' => true,
								'Optype.id' => $opId, 
								'Opstatustype.title LIKE' => $type
 						);

		if ($type == 'Actual') {
			$conditions['Output.evidenceOnFile'] = true;
		}
		
		$op1 = $this->Company->Bizassist->Output->find('all', array('conditions' => $conditions)); 

		$conditions = array(	'Project.company_id' => $company_id, 
								'Project.enabled' => true,
								'Output.enabled' => true,
								'Optype.id' => $opId, 
								'Opstatustype.title LIKE' => $type
 						);

		if ($type == 'Actual') {
			$conditions['Output.evidenceOnFile'] = true;
		}
		
		$op2 = $this->Company->Project->Output->find('all', array('conditions' => $conditions));

		$quantity = 0;
		foreach ($op1 as $entry) {
			$quantity += $entry['Output']['quantity'];
		}
		foreach ($op2 as $entry) {
			$quantity += $entry['Output']['quantity'];
		}

		return $quantity;
	}
	
	public function hadProject($company_id = -1) {
			
		$conditions = array(	'Project.company_id' => $company_id, 
								'Project.enabled' => true
 						);

		$op2 = $this->Company->Project->find('all', array('conditions' => $conditions));

if (AuthComponent::user('role') == 'admin') {
		//echo debug($op2);
}

		$quantity = 0;
		foreach ($op2 as $entry) {
			$quantity += 1;
		}

		return $quantity;
	}
	
	
/**
 * bareport method
 *
 * @param string $id
 * @return void
 */
	public function bareport($id = null, $status = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->Company->contain('Bizassist', 'Project', 'Agent', 'Bareport', 'Bareport.Agent',
								'Bizassist.Bastatustype', 'Bizassist.Agent', 'Bizassist.Output', 
								'Project.Bastatustype', 'Project.Agent', 'Project.Output');
		
		// Initial read of company
		$company = $this->Company->read(null, $id);		
		$newdata = array();
		
		// Update or Initiate the BAreport
		
		if (empty( $company['Bareport'] )) {
			$newData['Bareport']['company_id'] = $id;
		} else {
			$newData['Bareport']['company_id'] = $id;
			$newData['Bareport']['id'] = $company['Bareport']['id'];
		}

		// By default, reports will be true unless any components are disabled
		
		$newData['Bareport']['enabled'] = true;
		if ($company['Company']['enabled'] == false) {
			$newData['Bareport']['enabled'] = false;
		}

		// First set some default properties based on Company record
		
		if (isset($company['Company']['agent_id'])) {
			$newData['Bareport']['agent_id'] = $company['Company']['agent_id'];
		} else {
			$newData['Bareport']['agent_id'] = 0;
		}
		
		if (isset($company['Company']['westernPeninsula'])) {
			$newData['Bareport']['westernPeninsula'] = $company['Company']['westernPeninsula'];
		} else {
			$newData['Bareport']['westernPeninsula'] = false;
		}
		
		// Extract the BA status from the first BA on record
		
		$ba = $this->Company->Bizassist->find('first', array('conditions' => 
				array(	'Bizassist.company_id' => $id
					)));
		$newData['Bareport']['status'] = $ba['Bastatustype']['title'];

		// Look up specific outputs from a biz assist (defaults to Actual)
		
		if ($status == null) {
			$searchType = 'Actual';
		} else {
			$searchType = $status;
		}
		
		if ($searchType == 'Total') {
			$searchType = '%';
		}

		// BizAssist Engagement Form (id = 11), on file
		$newData['Bareport']['engaged'] = $this->existsInBizAssist(11, $id, $searchType);
				
		// BizAssist 6 Hours (id = 17), on file
		$newData['Bareport']['done6hours'] = $this->existsInBizAssist(17, $id, $searchType);
				
		// BizAssist Evidence Form (id = 12), on file
		$newData['Bareport']['completed'] = $this->existsInBizAssist(12, $id, $searchType);
		if ($newData['Bareport']['completed']) {
			$newData['Bareport']['done6hours'] = 0;
		}
					
		// New company in a business network (id = 7), on file
		$newData['Bareport']['newToNetwork'] = $this->existsInBizAssist(7, $id, $searchType);
		
		// New company within iNet region (id = 13), on file
		$newData['Bareport']['newToRegion'] = $this->existsInBizAssist(13, $id, $searchType);
		
		// Environmental Company assisted (id = 14), on file
		$newData['Bareport']['envBusiness'] = $this->existsInBizAssist(14, $id, $searchType);
					
		// Outputs from either BA or Project  (defaults to Forecast + Actual)
		
		// Jobs Created (id = 3), on file
		$newData['Bareport']['newJobs'] = $this->qtyInBAorProject(3, $id);

		// Jobs Safeguarded (id = 4), on file
		$newData['Bareport']['sgJobs'] = $this->qtyInBAorProject(4, $id);

		// Research Jobs Created (id = 5), on file
		$newData['Bareport']['newRJobs'] = $this->qtyInBAorProject(5, $id);

		// Research Jobs Safeguarded (id = 6), on file
		$newData['Bareport']['sgRJobs'] = $this->qtyInBAorProject(6, $id);

		// IPR Device (id = 8), on file
		$newData['Bareport']['iprUsed'] = $this->qtyInBAorProject(8, $id);

		// Product Launch (id = 9), on file
		$newData['Bareport']['newProducts'] = $this->qtyInBAorProject(9, $id);

		// GVA Increase (id = 10), on file
		$newData['Bareport']['increasedGVA'] = $this->qtyInBAorProject(10, $id);

		// Academic Collaboration (id = 15), on file
		$newData['Bareport']['collabBiz'] = $this->qtyInBAorProject(15, $id);

		// check if there is an SRB or Project on record
		$newData['Bareport']['hadProject'] = $this->hadProject($id);
		$newData['Bareport']['hadSRB'] = $this->qtyInBAorProject(16, $id);


		$newData['Bareport']['lineType'] = $searchType;
		
		// Save the record
		
		if (!$this->Company->Bareport->save($newData)) {
			$this->Session->setFlash(__('The report could not be saved. Please, try again.'));
		} else {
			$this->Session->setFlash(__('Report Updated'));
		}
					
if (AuthComponent::user('role') == 'admin') {
		//echo debug($newData);
}
		if ($this->request->is('post')) {
			$this->redirect(array('action'=>'view', $id));
		}
		//$this->set('company', $company);
		//$this->render('view');
	}

}

