<?php

class CartesController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Client','Probleme', 'Carte');

	public function carte_client($client_id = null) {
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
		/*$carte=$this->Carte->get_carte_client($client_id);
		$this->set('carte',$carte);
		$interventions = $this->Carte->get_interventions_carte($carte['ca']['id']);
		$this->set('i', $interventions);

		"SELECT ca.id, ca.date_achat, ca.credit, ca.credit_restant, ca.facturee, cl.nom, cl.prenom, cl.email, cl.telephone_portable
					FROM clients cl, cartes ca
					WHERE ca.client_id = cl.id
					AND ca.client_id = ".$client_id)[0]
		"SELECT i.date, i.credit_utilise
        					FROM interventions i
        					WHERE i.carte_id = ".$id*/

        $carte = $this->Carte->find('all', array(
			'contain' => array(
				'Client' => array(
					'fields' => array('nom', 'prenom', 'email', 'telephone_portable'),
					'conditions'=> array('Client.id =' => $client_id)
				),
				'Intervention' => array(
					'fields' => array('date', 'credit_utilise')
					)
				)
		));
		$this->set('carte',$carte[0]);

	}

	/*public function all_tags() {
		$data = $this->Tag->get_all_tags();
		//$data = $this->Tag->find('all', array('conditions' => array('Tag.client_id' => "$client_id")));
		$this->set('data', $data);

	}*/

	
	
}

?>