<?php


App::uses('AppModel', 'Model');

class Fiche extends AppModel{
	public $name = 'Fiche';
	public $useTable = 'fiches';
	public $beongsTo = array('Client','Admin');

	public $uses=array('Client');

	//retourne les informations nécessaires à la complétion d'une fiche
	public function get_info_fiche($id = null){
    if ($id == null)
        throw new NotFoundException(__('Fiche non valide'));
    return $this->query("SELECT * 
        FROM clients cl, fiches f, produits pr, modeles m, admins adm, type_produits tp, adresses adr, villes v
        WHERE 
        f.id = ".$id."
        and f.client_id = cl.id 
        and f.produit_id = pr.id 
        and pr.modele_id = m.id
        and tp.id = m.type_produit_id
        and adr.id = cl.adresse_id
        and v.id = adr.ville_id
        and adm.id=f.admin_id");
}

public function get_info_all_fiches(){

	return $this->query('SELECT f.id, f.date_debut, cl.id, cl.nom, cl.prenom, m.nom_modele 
        FROM clients cl, fiches f, produits pr, modeles m 
        WHERE f.client_id = cl.id 
        and f.produit_id = pr.id 
        and pr.modele_id = m.id');
}


public function get_fiches_client($client_id = null){
	if ($client_id == null)
        throw new NotFoundException(__('Fiche non valide'));

    return $this->query("SELECT f.id, m.nom_modele, f.date_debut
    					FROM fiches f, produits pr, modeles m, clients cl
    					WHERE f.client_id = ".$client_id."
    					AND f.client_id = cl.id
    					AND f.produit_id = pr.id
    					AND pr.modele_id = m.id
    					");
}

	
}

?>