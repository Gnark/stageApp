<?php

App::uses('AppModel', 'Model');

class Modele extends AppModel{
	public $hasMany='Produit';
	public $belongsTo=array('Marque','TypeProduit');

	/*public function get_nom_modele_produit ($id = null){
		return $this->query("SELECT nom_modele
							FROM modeles
							WHERE id = ".$id);
	}*/
}

?>