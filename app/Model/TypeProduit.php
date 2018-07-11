<?php

App::uses('AppModel', 'Model');

class TypeProduit extends AppModel{
	public $hasMany='Modele';
}

?>