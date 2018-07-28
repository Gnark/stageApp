<?php

class AdminsController extends AppController{
	
	public isAuthorized($user = null){
		parent::isAuthorized($user);
		return $user['role'] == 'admin';
	}


}