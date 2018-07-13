<?php

class ReparationsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Produit', 'Reparation');

	public function all_reparations(){

		$repa = $this->Reparation->get_all_info_reparations();
		$this->set('repa', $repa);

	}
	
}

?>