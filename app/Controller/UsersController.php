<?php 

class UsersController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login', 'inscription');
		//uncomment si je remets le Security Component
		//$this->Security->requirePost('login', 'inscription');
	}

	public function login(){
		/* //Les 2 lignes sont équivalentes
		debug($this->Auth->user('username'));
		debug(AuthComponent::user('username'));*/

		/* enregistre un nouvel utilisateur
		$this->User->save(array(
			'username' => 'Benjamin',
			'password' => $this->Auth->password('oui'),
			'role' => 'admin'
		));*/ 
		if (!empty($this->request->data)){
			if ($this->Auth->login()){
				return $this->redirect('/');
			}
			else {
				$this->Session->setFlash('Identifiant ou mot de passe non valide', 'alert', array('class' => 'alert-danger'));
			}
		}
	}

	public function logout(){
		$this->Auth->logout();
		$this->Session->destroy(array('Message', 'Auth'));
		return $this->redirect('/');
	}

	public function inscription(){
		//debug($this->request->data);
		if ($this->request->is('post')){
			$user = $this->User->findByUsername($this->request->data['User']['username']);
			//debug($this->request->data);
			if (empty($user)){
				//$this->User->create(array($this->request->data['User']['username'], $this->Auth->password($this->request->data['User']['password'])), true);
				$this->User->create($this->request->data, true);
				if($this->User->save(array(
					'username' => $this->request->data['User']['username'],
					'password' => $this->Auth->password($this->request->data['User']['password'])),
					true,
					array('username', 'password'))){
					$this->Auth->login();
					$this->Session->setFlash('Inscription réussie', 'alert', array('class' => 'alert-success'));
					$this->redirect('/');
				}
			}
			else{
				$this->Session->setFlash('Nom d\'utilisateur déjà pris', 'alert', array('class' =>'alert-danger'));
			}

		}
		
	}

	public function home(){
		//debug($this->Session->read('Auth.User'));
		//juste verifier :
		//debug($this->Session->check('Auth.User'));
		if($this->Session->check('Auth.User')){
			if($this->Session->read('Auth.User.role')=='admin'){
				$this->redirect('/admins/home');
			}
			else{

			}
		}
		else {

		}
	}
}

?>