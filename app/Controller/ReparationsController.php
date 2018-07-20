<?php

class ReparationsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Produit', 'Reparation');

	public function all_reparations(){

		//$rep = $this->Reparation->get_info_all_reparations();
		$rep = $this->Reparation->find('all', array(
			'contain' => array(
				'Produit' => array(
					'fields' => array(),
					'Modele' => array(
						'fields' => 'nom_modele'
					),
					'Client' => array(
						'fields' => array('nom', 'prenom')
					)
				)
			),
			'order' => array('Reparation.date_echeance' => 'asc')
		));
		$this->set('rep', $rep);

	}
	
}

?>