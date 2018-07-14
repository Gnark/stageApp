<?php

class ReparationsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Produit', 'Reparation');

	public function all_reparations(){

		$rep = $this->Reparation->get_info_all_reparations();
		$this->set('rep', $rep);

	}
	
}

?>