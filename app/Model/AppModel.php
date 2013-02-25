<?php
class AppModel extends Model {
	//var $actsAs = array('Containable', 'Linkable');
	var $actsAs = array('Containable');

	function getDisabled() {
		if (parent::hasField('enabled')) {
			$model = $this->name;
			return parent::find('all', array('recursive' => -1, 'conditions' => array("$model.enabled" => false)));
		} else {
			return array();
		}
	}
	
	function beforeSave() {
	    if (isset($this->data[$this->name]['modifiedDate'])) {
    		unset($this->data[$this->name]['modifiedDate']);
    	}
    	return true;
	}

	function findOFF($type, $options = array()) {
        switch ($type) {
            case 'superlist':
                if(!isset($options['fields']) || count($options['fields']) < 3) {
                    return parent::find('list', $options);
                }
 
                if(!isset($options['separator'])) {
                    $options['separator'] = ' ';
                }
 
                $options['recursive'] = -1;              
                $list = parent::find('all', $options);
 
                for($i = 1; $i <= 2; $i++) {
                    $field[$i] = str_replace($this->alias.'.', '', $options['fields'][$i]);               
                }           
 
                return Set::combine($list, '{n}.'.$this->alias.'.'.$this->primaryKey,
                                 array('%s'.$options['separator'].'%s',
                                       '{n}.'.$this->alias.'.'.$field[1],
                                       '{n}.'.$this->alias.'.'.$field[2]));
            break;                      
 
            default:              
                return parent::find($type, $options);
            break;
        }
    }
}
?>