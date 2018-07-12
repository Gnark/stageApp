<?php

class CartesController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Client','Probleme', 'Carte');

	public function carte_client($client_id = null) {
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
		$data = $this->Tag->get_tags_client($client_id);
		//$data = $this->Tag->find('all', array('conditions' => array('Tag.client_id' => "$client_id")));
		$this->set('data', $data);
		$client=$this->Client->get_identite_client($client_id);
		$this->set('client',$client);

	}

	/*public function all_tags() {
		$data = $this->Tag->get_all_tags();
		//$data = $this->Tag->find('all', array('conditions' => array('Tag.client_id' => "$client_id")));
		$this->set('data', $data);

	}*/

	
	
}

?>