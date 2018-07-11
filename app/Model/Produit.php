<?php


App::uses('AppModel', 'Model');

class Produit extends AppModel{
	public $name = 'Produit';
	public $belongsTo = array('Modele','Client');
	public $hasOne = array('Tag','Fiche');
	public $hasMany = 'MaterielExterne';

	public function get_produits_client ($client_id =null){
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
        return $this->query("SELECT m.nom_modele, pr.id, tp.type, ma.nom_marque
        					FROM produits pr, modeles m, type_produits tp, marques ma
        					WHERE pr.modele_id = m.id
        					AND m.marque_id = ma.id
        					AND m.type_produit_id = tp.id
        					AND pr.client_id = ".$client_id);

	}

	public function get_info_all_produits (){
		return $this->query('SELECT m.nom_modele, pr.id, tp.type, ma.nom_marque
        					FROM produits pr, modeles m, type_produits tp, marques ma
        					WHERE pr.modele_id = m.id
        					AND m.marque_id = ma.id
        					AND m.type_produit_id = tp.id
							');
	}


	public function get_info_produit ($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Produit non valide'));
		return $this->query("SELECT m.nom_modele, pr.id, tp.type, ma.nom_marque, pr.lien_photo, pr.mdp, pr.os, pr.identifiant_telemaintenance
        					FROM produits pr, modeles m, type_produits tp, marques ma
        					WHERE pr.modele_id = m.id
        					AND m.marque_id = ma.id
        					AND m.type_produit_id = tp.id
        					AND pr.id = ".$id
							);
	}



}

?>