<?php

class ProblemesController extends AppController{
	public $helpers = array('Html', 'Form');
	//public $uses=array();

	public function all_problemes() {
		$data=$this->Probleme->get_info_all_problemes();
		$this->set('data',$data);
		/*$data = $this->Client->find('all', array('fields' => array('Client.id', 'Client.nom', 'Client.prenom', 'Client.email')));
		$this->set('data', $data);*/

	}

	public function probleme($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Problème non valide'));
        $this->set('data', $this->Probleme->get_info_probleme($id));

	}

	/*public function client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Fiche non valide'));
        $nb_tags=$this->Client->get_nb_tags($id);
        $this->set('nb_tags',$nb_tags[0][0]['count(1)']);
        $this->set('data_client', $this->Client->get_info_client($id));
        $this->set('produits_client', $this->Client->get_produits_client($id));
        $this->set('fiches_client', $this->Fiche->get_fiches_client($id));
	}*/

	/*public function client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Fiche non valide'));
        $data=$this->Client->findById($id);
		$this->set('data',$data);
		
	}*/
	
}