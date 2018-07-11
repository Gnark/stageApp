<?php


App::uses('AppModel', 'Model');

class Intervention extends AppModel{
	public $name = 'Intervention';
	public $belongsTo = array('Carte', 'Probleme');
}

?>