<?php

class ClientsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Probleme','Client','Produit','Fiche');

	public function all_clients() {
		$data=$this->Client->get_info_all_clients();
		$this->set('data',$data);
		/*$data = $this->Client->find('all', array('fields' => array('Client.id', 'Client.nom', 'Client.prenom', 'Client.email')));
		$this->set('data', $data);*/

	}

	public function client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Fiche non valide'));
        $nb_tags=$this->Client->get_nb_tags($id);
        $this->set('nb_tags',$nb_tags[0][0]['count(1)']);
        $this->set('data_client', $this->Client->get_info_client($id));
        $this->set('produits_client', $this->Client->get_produits_client($id));
        $this->set('fiches_client', $this->Fiche->get_fiches_client($id));
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