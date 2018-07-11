<?php

class TagsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Client','Produit', 'Materiel_externe','Tag');

	public function all_tags_client($client_id = null) {
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
		$data = $this->Tag->get_tags_client($client_id);
		//$data = $this->Tag->find('all', array('conditions' => array('Tag.client_id' => "$client_id")));
		$this->set('data', $data);
		$client=$this->Client->get_identite_client($client_id);
		$this->set('client',$client);

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

?>