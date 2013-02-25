<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Company $Company
 * @property Output $Output
 */
class Project extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => 'Company.title ASC'
		),
		'Bastatustype' => array(
			'className' => 'Bastatustype',
			'foreignKey' => 'bastatustype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
		'Output' => array(
			'className' => 'Output',
			'foreignKey' => 'project_id',
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
	
}
