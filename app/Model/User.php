<?php

App::uses('AppModel', 'Model');


class User extends AppModel{

	public $validate = array(

        'password' => array(
            'notempty' => array(
                'rule' => array('notempty'),                            
            ),
            'password_confirm'=>array(
                'rule'=>array('password_confirm'),
                'message'=>'Password Confirmation must match Password',                         
            ),    
        ),      
    );

}

?>