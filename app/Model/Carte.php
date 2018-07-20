<?php


App::uses('AppModel', 'Model');

class Carte extends AppModel{
	public $name = 'Carte';
	public $belongsTo = 'Client';
	public $hasMany = 'Intervention';
	public $actsAs = array('Containable');


	public function get_carte_client($client_id = null){
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
		return $this->query("SELECT ca.id, ca.date_achat, ca.credit, ca.credit_restant, ca.facturee, cl.nom, cl.prenom, cl.email, cl.telephone_portable
					FROM clients cl, cartes ca
					WHERE ca.client_id = cl.id
					AND ca.client_id = ".$client_id)[0];
	}

	public function get_interventions_carte($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Carte non valide'));
        return $this->query("SELECT i.date, i.credit_utilise
        					FROM interventions i
        					WHERE i.carte_id = ".$id
    						);
	}
}

?>