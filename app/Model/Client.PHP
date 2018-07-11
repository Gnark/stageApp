<?php

App::uses('AppModel', 'Model');


class Client extends AppModel{
	public $name = 'Client';
	public $hasMany=array('Fiche','MaterielExterne','Produit','Tag');
	public $hasOne='Carte';
	public $belongsTo=array('Adresse','Probleme');

	public $uses=array('Tag','Adresse');


	public function get_info_all_clients(){

		return $this->query('SELECT id, nom, prenom, email
							FROM clients');


	}

	public function get_info_client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Client non valide'));
        $client = $this->query("SELECT id, nom, prenom, email, telephone_fixe, telephone_portable, adresse_id
        					FROM clients
        					WHERE id = ".$id);
        $client_complet = array('cl' => $client[0]['clients'], 'adr' => $this->Adresse->get_adresse_complete($client[0]['clients']['adresse_id']), 'carte' => $this->get_carte_client($id));
        return $client_complet;
	}

	public function get_nb_tags($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Client non valide'));
        return $this->query("SELECT count(1) 
        	FROM tags
        	WHERE client_id = ".$id
        	);
	}

	public function get_produits_client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Client non valide'));
        return $this->Produit->get_produits_client($id);
	}

	public function get_carte_client($id = null){
		$carte = $this->query("SELECT id, credit_restant, facturee
					FROM cartes
					WHERE client_id = ". $id
					);
		if (!$carte)
			return $carte;
		return $carte[0]['cartes'];
	}

	public function get_identite_client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Client non valide'));
        return $this->query("SELECT nom, prenom
        			FROM clients
        			WHERE id = ".$id)[0]['clients'];
	}

}

?>