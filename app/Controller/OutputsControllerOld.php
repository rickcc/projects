<?php
App::uses('AppController', 'Controller');
CakePlugin::load('Filter');
/**
 * Outputs Controller
 *
 * @property Output $Output
 */
class OutputsController extends AppController {
	
    public $components = array('RequestHandler', 'Filter.Filter');  
    public $filters = array  
        (  
            'index' => array  
            (  
                'Output' => array  
                (  
					//'Output.id',
                    'Optype.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Output Type', 
                    	'filterField' => 'Output.optype_id'
                    ),
                    'Opstatustype.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Status', 
                    	'filterField' => 'Output.opstatustype_id'
                    )/*,
                    'Output.enabled' => array
                    (
                    	'type' => 'checkbox', 
                    	'default' => 1,
                    	'label' => 'Enabled'
                    )*/
                )  
            )
        );  
	
/**
 * index method
 *
 * @return void
 */
	public function index($export = null) {
		$this->disableCache();
		//$this->Output->recursive = 0;
		$this->set('outputs', $this->paginate());
		
		if ($export == "export") {
			$this->export($this->Output->find('all'));
		}
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->disableCache();
		$this->Output->id = $id;
		if (!$this->Output->exists()) {
			throw new NotFoundException(__('Invalid output'));
		}
		$this->set('output', $this->Output->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->disableCache();
		if ($this->request->is('post')) {
			$this->Output->create();
			if ($this->Output->save($this->request->data)) {
				$this->Session->setFlash(__('The output has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The output could not be saved. Please, try again.'));
			}
		}
		$bizassists = $this->Output->Bizassist->find('list');
		$projects = $this->Output->Project->find('list');
		$optypes = $this->Output->Optype->find('list');
		$opstatustypes = $this->Output->Opstatustype->find('list');
		$this->set(compact('bizassists', 'projects', 'optypes', 'opstatustypes'));
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
		$this->Output->id = $id;
		if (!$this->Output->exists()) {
			throw new NotFoundException(__('Invalid output'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Output->save($this->request->data)) {
				$this->Session->setFlash(__('The output has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The output could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Output->read(null, $id);
		}
		
		$output = $this->Output->read(null, $id);
		$company_id = $output['Bizassist']['company_id'];
		if ($company_id == NULL) 
			$company_id = $output['Project']['company_id'];
		
		$bizassists = $this->Output->Bizassist->find('list');
		$bizassists = $this->Output->Bizassist->find('list', array('conditions' => array('Bizassist.company_id' => $company_id)));
		$projects = $this->Output->Project->find('list');
		$projects = $this->Output->Project->find('list', array('conditions' => array('Project.company_id' => $company_id)));
		$optypes = $this->Output->Optype->find('list');
		$opstatustypes = $this->Output->Opstatustype->find('list');
		$this->set(compact('bizassists', 'projects', 'optypes', 'opstatustypes'));
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
		$this->Output->id = $id;
		if (!$this->Output->exists()) {
			throw new NotFoundException(__('Invalid output'));
		}
		if ($this->Output->delete()) {
			$this->Session->setFlash(__('Output deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Output was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	public function report_outputs($match = null, $ba_only = false, $proj_only = false, $no_sum = false)
	{
	  	$find_conditions = array(
	  				'recursive' => 1,
	  				'fields' => array('Optype.title AS Type', 'Opstatustype.title AS Status', 'SUM(Output.quantity) As Quantity', '*', 'Bizassist.*', 'Project.*'),
	  				'order' => array('opstatustype_id', 'optype_id'),
	  				'group' => array('optype_id', 'opstatustype_id')
	  				);
	  	
	  	if ($match) {
	  		$find_conditions['conditions']['Opstatustype.title'] = "$match";
		}

	  	if ($ba_only) {
	  		$find_conditions['conditions']['Output.bizassist_id > '] = "0";
		}

	  	if ($proj_only) {
	  		$find_conditions['conditions']['Output.project_id > '] = "0";
		}

		if (AuthComponent::user('role') == 'admin') { 
			
  			//$find_conditions['conditions']['Bizassist.company_id'] = "182";
  			//$find_conditions['conditions']['OR'] = array('Bizassist.company_id' => 182, 'Project.company_id' => 182);
		}
		
		//$this->Output->recursive = 3;
		$this->Output->contain('Bizassist', 'Project', 'Optype', 'Opstatustype');
	  	$outputs = $this->Output->find('enabled', $find_conditions);
	  	$this->set('outputs', $outputs);
	  	$this->set('title_for_layout', "Dashboard");
	  	
	  	$this->render('report');
	}

	public function report_ba($match = null)
	{
		$this->report_outputs($match, true);
	}

	public function report_projects($match = null)
	{
		$this->report_outputs($match, false, true);
	}

	public function report_all($match = null) {
		$this->report_outputs($match, false, true);
	}
	
	public function report_disabled() {
	/*
		$outputs = $this->Output->find('all', array(
					'conditions' => array('Output.enabled !=' => true),
	  				'fields' => array('Output.id AS Id', 'Bizassist.title AS BizAssist', 'Project.title AS Project', 'Optype.title AS Type', 'Opstatustype.title AS Status', 'Output.quantity')
	  				//,'enabledOnly' => true
					));

		$bizassists = $this->Output->Bizassist->find('all', array(
					'conditions' => array('Bizassist.enabled !=' => true),
	  				'fields' => array('Bizassist.id AS Id', 'Bizassist.title AS BizAssist', 'Bastatustype.title AS Status')
					));

		$this->set(compact('bizassists', 'outputs'));
	*/
	
		$this->set('companies', ClassRegistry::init('Company')->getDisabled());
		$this->set('bizassists', ClassRegistry::init('Bizassist')->getDisabled());
		$this->set('projects', ClassRegistry::init('Project')->getDisabled());
		$this->set('outputs', ClassRegistry::init('Output')->getDisabled());

	  	$this->render('disabled');
	}
	
	/**
	 *
	 * Dynamically generates a .csv file by looping through the results of a sql query.
	 *
	 */
	 
	function export($results = null)
	{
		if ($results == null) {
			//$results = $this->Output->find('all');
			$results = $this->paginate();
		}
	
		ini_set('max_execution_time', 600); //increase max_execution_time to 10 min if data set is very large
	 
		//create a file
		$filename = "export_".date("Y.m.d").".csv";
		$csv_file = fopen('php://output', 'w');
	 
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename="'.$filename.'"');
	 
		//$results = $this->Output->query($sql);	// This is your sql query to pull that data you need exported
		//or
		//$results = $this->Output->find('all', array());
	 
	 	$headers = array();
	 	$firstResult = $results[0];
		foreach (array_keys($firstResult) as $key): 
			foreach (array_keys($firstResult[$key]) as $subkey): 
				array_push($headers, "$key.$subkey");
			endforeach;
		endforeach;

		// The column headings of your .csv file
		$header_row = $headers;
		fputcsv($csv_file,$header_row,',','"');
	 
		// Each iteration of this while loop will be a row in your .csv file where each field corresponds to the heading of the column
		foreach($results as $result)
		{
			$rows = array();
			foreach (array_values($result) as $val): 
				foreach (array_values($val) as $val2): 
					array_push($rows, $val2);
				endforeach; 
			endforeach; 

			fputcsv($csv_file,$rows,',','"');
		}
	 
		fclose($csv_file);
		
		$this->autoRender = FALSE;
	}

}
