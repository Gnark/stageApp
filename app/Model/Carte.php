<?php


App::uses('AppModel', 'Model');

class Carte extends AppModel{
	public $name = 'Carte';
	public $belongsTo = 'Client';
	public $hasMany = 'Intervention';

	public function get_carte_client($client_id = null){
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
		$this->query("SELECT ca.id, ca.date_achat, ca.credit, ca.credit_restant, ca.facturee, cl.nom, cl.prenom, i.date, i.credit_utilise
					FROM clients cl, cartes ca, interventions i,
					WHERE i.carte_id = ca.id
					AND ca.client_id = ".$client_id)[0];
	}
}

?>