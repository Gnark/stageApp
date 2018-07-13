<?php

class CartesController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Client','Probleme', 'Carte');

	public function carte_client($client_id = null) {
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
		$carte=$this->Carte->get_carte_client($client_id);
		$this->set('carte',$carte);
		$interventions = $this->Carte->get_interventions_carte($carte['ca']['id']);
		$this->set('i', $interventions);

	}

	/*public function all_tags() {
		$data = $this->Tag->get_all_tags();
		//$data = $this->Tag->find('all', array('conditions' => array('Tag.client_id' => "$client_id")));
		$this->set('data', $data);

	}*/

	
	
}

?>