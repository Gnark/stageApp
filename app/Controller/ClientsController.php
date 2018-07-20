<?php

class ClientsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Probleme','Client','Produit','Fiche');

	public function all_clients() {
		/*$data=$this->Client->get_info_all_clients();
		$this->set('data',$data);*/
		$this->Client->recursive = -1;
		$data = $this->Client->find('all', array(
				'fields' => array('id', 'nom', 'prenom', 'email')

		));
		$this->set('data',$data);

		/*$data = $this->Client->find('all', array('fields' => array('Client.id', 'Client.nom', 'Client.prenom', 'Client.email')));
		$this->set('data', $data);*/

	}

	public function client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Fiche non valide'));
        $nb_tags=$this->Client->get_nb_tags($id);
        $this->set('nb_tags',$nb_tags[0][0]['count(1)']);
        /*$this->set('data_client', $this->Client->get_info_client($id));
        $this->set('produits_client', $this->Client->get_produits_client($id));
        $this->set('fiches_client', $this->Fiche->get_fiches_client($id));*/

        "SELECT id, nom, prenom, email, telephone_fixe, telephone_portable, adresse_id
        					FROM clients
        					WHERE id = ".$id)
		"SELECT id, credit_restant, facturee
					FROM cartes
					WHERE client_id = ". $id
		"SELECT nom, prenom
        			FROM clients
        			WHERE id = ".$id)[0]['clients']
		"SELECT m.nom_modele, pr.id, tp.type, ma.nom_marque
        					FROM produits pr, modeles m, type_produits tp, marques ma
        					WHERE pr.modele_id = m.id
        					AND m.marque_id = ma.id
        					AND m.type_produit_id = tp.id
        					AND pr.client_id = ".$client_id

        $data_client = $this->Client->find('all', array(
			'contain' => array(
				'Carte' => array(
					'fields' => array('id', 'credit_restant', 'facturee')
				),
				/*'Intervention' => array(
					'fields' => array('date', 'credit_utilise')
					)
				)*/
			'conditions' => array('Client.id =' => $id),
			'fields' => array('id', 'nom', 'prenom', 'email', 'telephone_fixe', 'telephone_portable', 'adresse_id')
		));
	}

	public function modif_client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Fiche non valide'));
        $nb_tags=$this->Client->get_nb_tags($id);
        $this->set('nb_tags',$nb_tags[0][0]['count(1)']);
        $this->set('data_client', $this->Client->get_info_client($id));
        $this->set('produits_client', $this->Client->get_produits_client($id));
        $this->set('fiches_client', $this->Fiche->get_fiches_client($id));
	}

	/*public function client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Fiche non valide'));
        $data=$this->Client->findById($id);
		$this->set('data',$data);
		
	}*/
	
}