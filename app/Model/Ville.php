<?php

App::uses('AppModel', 'Model');

class Ville extends Appmodel {
	public $hasMany='Adresse';

	public function get_info_ville($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Client non valide'));
        return $this->query("SELECT nom_ville, code_postal
        					FROM villes
        					WHERE id = ".$id);
	}

	
}

?>