<?php

App::uses('AppModel', 'Model');

class Adresse extends AppModel{
	public $hasMany='Profil';
	public $belongsTo='Ville';


	public function get_adresse_complete($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Adresse non valide'));
        $adresse =  $this->query("SELECT id, numero, nom_rue, ville_id
        						FROM adresses
        						WHERE id = ".$id);
        $adresse_complete = array('rue' => $adresse[0]['adresses'], 'ville' => $this->Ville->get_info_ville($adresse[0]['adresses']['ville_id'])[0]['villes']);
        return $adresse_complete;
	}



}

?>