<?php


App::uses('AppModel', 'Model');

class Tag extends AppModel{

	//10 digits
	public $name = 'Tag';
	public $belongsTo = array('Produit', 'Client', 'Materiel_externe');
	public $uses=array('Client','Produit','Materiel_externe');

	public function get_tags_client($client_id = null){
		if ($client_id == null)
        	throw new NotFoundException(__('Client non valide'));
        $tags = $this->query("SELECT t.id, pr.id
        					FROM tags t, clients cl, produits pr, materiel_externes me
        					WHERE (t.produit_id = pr.id
        					OR t.materiel_externe_id = me.id)
        					AND t.client_id = cl.id
        					AND t.client_id = ".$client_id
        					);
        return $tags;
	}
}

?>