<?php
//App::uses('AppController', 'Controller');
CakePlugin::load('Filter');
/**
 * Companies Controller
 *
 * @property Bareport $Bareport
 */
class BareportsController extends AppController {

    public $components = array('Filter.Filter');  
    public $filters = array  
        (  
            'index' => array  
            (  
                'Bareport' => array  
                (  
                    'Agent.id' => array
                    (
                    	'type' => 'select', 
                    	'label' => 'Agent', 
                    	'filterField' => 'Bareport.agent_id'
                    )
                )  
            ),
            'summary' => array()
        );  

/**
 * index method
 *
 * @return void
 */
	public function index($export = null, $hiderows = null) {
		//$this->Bareport->recursive = 0;
    	$this->paginate = array(
	        'conditions' => array('Bareport.enabled' => true),
    	);
		if ($hiderows == "hiderows") {
			$this->set('hiderows', true);
		} else {
			$this->set('hiderows', false);
		}
		$this->set('bareports', $this->paginate());
		
		if ($export == "export") {
			$this->export($this->Bareport->find('all', array(
				'fields' => array(
					'Company.iNetID', 'Company.title', 'Bareport.status', 'Bareport.engaged', 'Bareport.completed', 
					'Bareport.hadProject', 'Bareport.hadSRB', 'Bareport.done6hours',
					'Bareport.westernPeninsula', 'Agent.title' //,
					//'Bareport.envBusiness', 'Bareport.newToRegion', 'Bareport.newToNetwork' 
					), 
				'conditions' => array('Bareport.enabled' => true)
				)),
				// Header Aliases
				array(
					'Company.iNetID' => 'ID', 'Company.title' => 'Company', 'Bareport.status' => 'Status',
					'Bareport.engaged' => 'Initial Engagement Form', 'Bareport.completed' => 'Bus Assist Form Completed', 
					'Bareport.westernPeninsula' => 'Western P', 'Bareport.done6hours' => 'Had 6 hours',
					'Bareport.hadProject' => 'Project Approved', 'Bareport.hadSRB' => 'SRB Attended', 'Agent.title' => 'Delivery Partner'
					)
				);
		}

		if ($export == "exportAll") {
			$this->export($this->Bareport->find('all', array(
				'fields' => array(
					'Company.iNetID', 'Company.title', 'Bareport.status', 'Bareport.engaged', 'Bareport.completed', 
					'Bareport.envBusiness', 'Bareport.newToRegion', 'Bareport.newToNetwork', 
					'Bareport.hadProject', 'Bareport.hadSRB', 'Bareport.done6hours',
					'Bareport.westernPeninsula', 'Agent.title',
					'Bareport.newJobs', 'Bareport.newRJobs', 'Bareport.sgJobs', 'Bareport.sgRJobs',
					'Bareport.iprUsed', 'Bareport.collabBiz', 'Bareport.increasedGVA', 'Bareport.newProducts'
					), 
				'conditions' => array('Bareport.enabled' => true)
				)),
				// Header Aliases
				array(
					'Company.iNetID' => 'ID', 'Company.title' => 'Company', 'Bareport.status' => 'Status',
					'Bareport.engaged' => 'Initial Engagement Form', 'Bareport.completed' => 'Bus Assist Form Completed', 
					'Bareport.hadProject' => 'Project Approved', 'Bareport.hadSRB' => 'SRB Attended', 'Agent.title' => 'Delivery Partner',
					'Bareport.envBusiness' => 'Environmental Business', 'Bareport.newToRegion' => 'New to Region', 'Bareport.newToNetwork' => 'New to a Business Network',
					'Bareport.newJobs' => 'New Jobs Created', 'Bareport.newRJobs' => 'New Research Jobs', 'Bareport.sgJobs' => 'Safeguarded Jobs', 'Bareport.sgRJobs' => 'Safeguarded Research Jobs',
					'Bareport.iprUsed' => 'New Patents / IP', 'Bareport.collabBiz' => 'New Collaboration', 'Bareport.increasedGVA' => 'Increased GVA', 'Bareport.newProducts' => 'New Products / Services',
					'Bareport.westernPeninsula' => 'Western P', 'Bareport.done6hours' => 'Had 6 hours'
					)
				);
		}

	}

	public function summary() {
    	$this->paginate = array(
	        'conditions' => array('Bareport.enabled' => true),
	        'fields' => array ( 
	        		'Company.iNetID', 'Company.title', 'Bareport.status', 
	        		'sum(Bareport.engaged) as engaged', 'sum(Bareport.completed) as completed', 'sum(Bareport.done6hours) as done6hours', 'sum(Bareport.westernPeninsula) as westernPeninsula', 
	        		'sum(Bareport.envBusiness) as envBusiness', 'sum(Bareport.newToRegion) as newToRegion', 'sum(Bareport.newToNetwork) as newToNetwork', 
	        		'sum(Bareport.newJobs) as newJobs', 'sum(Bareport.newRJobs) as newRJobs', 'sum(Bareport.sgJobs) as sgJobs', 'sum(Bareport.sgRJobs) as sgRJobs',
	        		'sum(Bareport.iprUsed) as iprUsed', 'sum(Bareport.collabBiz) as collabBiz', 'sum(Bareport.increasedGVA) as increasedGVA', 'sum(Bareport.newProducts) as newProducts',
	        		'sum(Bareport.hadProject) as hadProject', 'sum(Bareport.hadSRB) as hadSRB',
	        		'Agent.title'
	        )
    	);
		$this->set('hiderows', true);
		$this->set('bareports', $this->paginate());
		$this->render('index');		
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Bareport->id = $id;
		if (!$this->Bareport->exists()) {
			throw new NotFoundException(__('Invalid Bareport'));
		}
		//$this->Bareport->recursive = 2;
		$this->Bareport->contain('Agent', 'Company');
		$this->set('bareport', $this->Bareport->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bareport->create();
			if ($this->Company->save($this->request->data)) {
				$this->Bareport->setFlash(__('The Bareport has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The Bareport could not be saved. Please, try again.'));
			}
		}
		$agents = $this->Bareport->Agent->find('list');
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
		$this->Bareport->id = $id;
		if (!$this->Bareport->exists()) {
			throw new NotFoundException(__('Invalid Bareport'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bareport->save($this->request->data)) {
				$this->Session->setFlash(__('The Bareport has been saved'));
				if ($this->referer() != '/') {
					$this->redirect($this->referer());
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The Bareport could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bareport->read(null, $id);
		}
		$agents = $this->Bareport->Agent->find('list');
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
		$this->Bareport->id = $id;
		if (!$this->Bareport->exists()) {
			throw new NotFoundException(__('Invalid Bareport'));
		}
		if ($this->Bareport->delete()) {
			$this->Session->setFlash(__('Bareport deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bareport was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function runAll() {
		$list = $this->Bareport->Company->find('all');
		foreach ($list as $company) {
			$this->requestAction(
			    array('controller' => 'companies', 'action' => 'bareport'),
			    array('pass' => array($company['Company']['id']))
			);
		}
//		echo debug( $list );
		
		$this->redirect(array('action' => 'index'));
	}
	
	function export($results = null, $titles = array())
	{
		if ($results == null) {
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
		foreach (array_keys($firstResult) as $key) {
			foreach (array_keys($firstResult[$key]) as $subkey) {
				$myTitle = "$key.$subkey";
				if (isset($titles[$myTitle])) {
					$myTitle = $titles[$myTitle];
				}
				array_push($headers, $myTitle);
			}
		}

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
		
		$this->set('results', $results);
		$this->autoRender = FALSE;
	}

}

