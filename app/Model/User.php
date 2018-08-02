<?php

App::uses('AppModel', 'Model');


class User extends AppModel{

	public $validate = array(
		'username' => array(
            'notempty' => array(
                'rule' => array('notblank'),                            
            )
        ),
        'password' => array(
            'notempty' => array(
                'rule' => array('notblank'),                            
            )
        )/*,
            'password_confirm'=>array(
                'rule'=>array('password_confirm'),
                'message'=>'Password Confirmation must match Password',                         
            ),    
        )*/     
    );

    /*public function password_confirm(){

    	if ($this->data['User']['password'] !== $this->data['User']['password_confirmation']){
            return false;       
        }
        return true;

    }*/

}

?>