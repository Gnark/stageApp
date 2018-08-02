<?php

class AdminsController extends AppController{
	
	public function isAuthorized($user = null){
		parent::isAuthorized($user);
		return $user['role'] == 'admin';
	}

	public function home(){

	}


}