<?php
App::uses('AppModel', 'Model');
/**
 * Output Model
 *
 * @property Project $Project
 * @property Optype $Optype
 * @property Opstatustype $Opstatustype
 */
class Output extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'optype_id.title';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bizassist' => array(
			'className' => 'Bizassist',
			'foreignKey' => 'bizassist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Optype' => array(
			'className' => 'Optype',
			'foreignKey' => 'optype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Opstatustype' => array(
			'className' => 'Opstatustype',
			'foreignKey' => 'opstatustype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
    public $findMethods = array('enabled' =>  true);

	protected function _findEnabledNew($state, $query, $results = array()) {
        if ($state == 'before') {
        	$fieldName = $this->name . ".enabled";
            $query['conditions']["$fieldName"] = true;
            return $query;
        }
        
        // Must be in $state == 'after'
        return $results;
	}
	
	protected function _findEnabled($state, $query, $results = array()) {
        if ($state == 'before') {
            //$query['conditions']['Output.enabled'] = true;
            
            $cond1 = array('NOT' => array('Bizassist.id' => null), 'Bizassist.enabled' => true);
            $cond2 = array('NOT' => array('Project.id' => null), 'Project.enabled' => true);
            
            $cond3 = array(
            			'AND' => array(
            						'OR' => array(
            									array('NOT' => array('Bizassist.id' => null), 'Bizassist.enabled' => true),
            									array('NOT' => array('Project.id' => null), 'Project.enabled' => true)
            									),
            						'Output.enabled' => true
            						)
            			);
            			
            //$query['conditions']["OR"] = array( "OR" => array('AND' => $cond1, 'AND' => $cond2));

            $query['conditions'][] = $cond3;

//            if ($this->Output['bizassist_id'] > 0) {
            	//$query['conditions']['Bizassist.enabled'] = true;
  //          }
            return $query;
        }
        
        // Must be in $state == 'after'

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
        
        return $newResults;
    }

	function afterFindOFF($results) {
		foreach ($results as $key => $val) {
			if (isset($val['Output']['actionDate'])) {
				$results[$key]['Output']['actionDate'] = $this->dateFormatAfterFind($val['Output']['actionDate']);
			}
			if (isset($val['actionDate'])) {
				$results[$key]['actionDate'] = $this->dateFormatAfterFind($val['actionDate']);
			}
		}
		//debug($results);
		return $results;
	}
	
	function dateFormatAfterFind($dateString) {
		return date('d-M-Y', strtotime($dateString));
	}

	function afterFind($results, $primary = false) {
		if ($primary == true) {
			// Handle calculated fields
			if (Set::check($results, "0.0") && Set::check($results, "0." . $this->alias)) {
				foreach ($results as &$entry) {
					$entry[$this->alias] = array_merge($entry[$this->alias], $entry[0]);
					unset($entry[0]);
				}
			}
		}
		return $results;
	}

}
