<?php


App::uses('AppModel', 'Model');

class Carte extends AppModel{
	public $name = 'Carte';
	public $belongsTo = 'Client';
	public $hasMany = 'Intervention';
}

?>