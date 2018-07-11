<?php

App::uses('AppModel', 'Model');

class Marque extends AppModel{
	public $hasMany='Modele';
}

?>