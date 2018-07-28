<?php 

class UsersController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login', 'inscription');
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
		return $this->redirect('/');
	}

	public function inscription(){

	}
}

?>