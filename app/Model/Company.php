<?php
App::uses('AppModel', 'Model');
/**
 * Company Model
 *
 * @property Agent $Agent
 * @property Bizassist $Bizassist
 * @property Project $Project
 */
class Company extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
	//public $order = 'Company.title ASC';
	public $order = 'CAST(Company.iNetID AS SIGNED) ASC';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Agent' => array(
			'className' => 'Agent',
			'foreignKey' => 'agent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Bizassist' => array(
			'className' => 'Bizassist',
			'foreignKey' => 'company_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'company_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)/*,
		'Bareport' => array(
			'className' => 'Bareport',
			'foreignKey' => 'company_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)*/
	);

	public $hasOne = array(
		'Bareport' => array(
			'className' => 'Bareport',
			'foreignKey' => 'company_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

//    public $findMethods = array('enabled' =>  true, 'find2BA' => true);
    public $findMethods = array('enabled' =>  true);

	protected function _findEnabled($state, $query, $results = array()) {
        if ($state == 'before') {
        	$fieldName = $this->name . ".enabled";
            $query['conditions']["$fieldName"] = true;
            return $query;
        }
        
        // Must be in $state == 'after'
        return $results;
	}
	
	protected function _find2BAoff($state, $query, $results = array()) {  // NOT WORKING YET
        if ($state == 'before') {
            
            $cond1 = array('COUNT(Bizassist.id) > ' => 1);
            //$query['conditions'][] = $cond1;

            return $query;
        }
        
        // Must be in $state == 'after'

		/*
		$newResults = array();
		
		foreach ($results as $key => $val) {
        	if (isset($val['Bizassist']['id']) && ($val['Bizassist']['id'] > 0)) {

        		$company_id = $val['Bizassist']['company_id'];
        		$company = $this->Bizassist->Company->findById($company_id);

        		if (isset($company['Company']['enabled']) && ($company['Company']['enabled'] == true)) {
						$newResults[$key] = $val;
        		}
        	}
        	if (isset($val['Project']['id']) && ($val['Project']['id'] > 0)) {

        		$company_id = $val['Project']['company_id'];
        		$company = $this->Project->Company->findById($company_id);

        		if (isset($company['Company']['enabled']) && ($company['Company']['enabled'] == true)) {
						$newResults[$key] = $val;
        		}
        	}
        }
        */
        return $results;
    }


}
