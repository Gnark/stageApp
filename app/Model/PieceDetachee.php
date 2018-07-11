<?php


App::uses('AppModel', 'Model');

class PieceDetachee extends AppModel{
	public $name = 'PieceDetachee';
	public $belongsTo = 'Produit';
}

?>