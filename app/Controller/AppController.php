<?php
//App::uses('AppController', 'Controller', 'AuthComponent', 'Controller/Component', 'SessionComponent', 'PaginatorComponent');
App::uses('AppController', 'Controller', 'AuthComponent', 'Controller/Component', 'SessionComponent');

class AppController extends Controller {
	public $uses = array('User');
	//public $helpers = array('Html', 'Form', 'Text', 'Javascript', 'Ajax');
	//public $helpers = array('Html', 'Form', 'Text', 'Session', 'Js' => array('Prototype', 'scriptaculous'));
	public $helpers = array('Html', 'Form', 'Text', 'Session', 'Js' => array('Jquery'));
	//var $components = array('Auth','RequestHandler','Filter');

	public $components = array( 
        'Session', 
        'RequestHandler',
        //'Paginator',
       // 'Filter',
        'Auth' => array( 
            //'loginRedirect' => array('controller' => 'companies', 'action' => 'index'),
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
//            'loginAction' => array('controller' => 'users', 'action' => 'login'), 
//            'authError' => 'Did you really think you are allowed to see that?', 
//            'authenticate' => array('Form'),
//            'authenticate' => array(
//            	'Form' => array('fields' => array('username' => 'username', 'password' => 'password')), 
//              'Basic' => array('userModel' => 'Users.User', 'fields' => array('username' => 'username', 'password' => 'password')) 
//             ), 
            'authorize' => array('Controller') 
        ) 
    ); 

	public function isAuthorized($user) { 
        if (isset($user['role']) && $user['role'] == 'admin') { 
             return true; //Admin can access every action 
        } 
        if (isset($user['role']) && $user['role'] == 'user') { 
        	if (in_array($this->action, array('delete'))) {
            	return false;
        	} else {
        		return true;
        	}
		}
        return false; // The rest don't 
    } 

	function beforeFilter() {
		
		$this->disableCache();

        //$this->Auth->allow('index','view','xmlrpc','dblist','locate');
        //$this->Auth->allow('index','view','xmlrpc','dblist');

        //$this->Auth->autoRedirect = true; 
        //$this->Auth->userModel = 'Users.User'; 
        $this->Auth->allow('display'); 
        //$this->Auth->allow('index', 'view'); 

		if (isset($this->params['named']['key'])) {
			$key = $this->params['named']['key'];
			$this->data = $this->User->findByKey($key);
			$this->Auth->login($this->data);
		}

		/*
		if($this->RequestHandler->requestedWith('json')) {
			if(function_exists('json_decode')) {
				$jsonData = json_decode(utf8_encode(trim(file_get_contents('php://input'))), true);
			}
	
			if(!is_null($jsonData) and $jsonData !== false) {
				$this->data = $jsonData;
			}
			//echo $this->data;
			//echo "Done!!";
		}
		*/

		if ($this->Auth->loggedIn()) { 
			//debug( " Logged In");
			$this->set('loggedIn', true);
		} else {
			//debug( " Guest");
			$this->set('loggedIn', false);
		} 

	}
	
	function afterFilter() {
		if (isset($this->params['named']['key'])) {
			if ($this->Auth->user() != NULL) {
				$this->Auth->logout();
			}
		}
	}

	function toggleEnable($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id', true));
			$this->redirect($this->referer());
		}
		$model = $this->uses[0]; 
		$this->data = $this->$model->read(null, $id);
		
		if ($this->data[$model]['enabled'] == 1) {
			$this->data[$model]['enabled'] = 0;
			$resultWord = "disabled";
		} else {
			$this->data[$model]['enabled'] = 1;
			$resultWord = "enabled";
		}
		if ($this->$model->save($this->data)) {
			$this->Session->setFlash(__("The $model has been $resultWord", true));
			$this->redirect($this->referer());
		} else {
			$this->Session->setFlash(__("The $model could not be $resultWord. Please, try again.", true));
			$this->redirect($this->referer());
		}
	}	
}

?>