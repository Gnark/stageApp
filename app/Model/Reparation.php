<?php


App::uses('AppModel', 'Model');

class Reparation extends AppModel{
	public $name = 'Reparation';
	public $belongsTo = 'Produit';

	public function get_info_all_reparations(){
		return $this->query('SELECT r.id, r.date_echeance, r.cout, r.finie, cl.nom, cl.prenom, m.nom_modele
							FROM reparations r, clients cl, produits pr, modeles m
							WHERE r.produit_id = pr.id 
							AND m.id = pr.modele_id
							AND cl.id = pr.client_id
							ORDER BY r.date_echeance');
	}

}

?>