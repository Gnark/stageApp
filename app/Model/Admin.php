<?php

App::uses('AppModel', 'Model');


class Admin extends AppModel{
	//public $hasOne='Profil';
	//public $belongsTo

	public $virtualFields = array(
    'full_name' => 'CONCAT(Admin.prenom, " ", Admin.nom)'
	);

}

?>