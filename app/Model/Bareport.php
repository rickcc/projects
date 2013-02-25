<?php
App::uses('AppModel', 'Model');
/**
 * Bizassist Model
 *
 * @property Company $Company
 * @property Bastatustype $Bastatustype
 * @property Agent $Agent
 */
class Bareport extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'title';
	public $order = 'CAST(Company.iNetID AS SIGNED) ASC';

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
