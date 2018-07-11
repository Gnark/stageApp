<?php

class ProduitsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses=array('Client','Produit','Fiche');

	public function all_produits() {
		$data=$this->Produit->get_info_all_produits();
		$this->set('data',$data);

	}

	/*public function client($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Fiche non valide'));
        $nb_tags=$this->Client->get_nb_tags($id);
        $this->set('nb_tags',$nb_tags[0][0]['count(1)']);
        $this->set('data_client', $this->Client->get_info_client($id));
        $this->set('produits_client', $this->Client->get_produits_client($id));
        $this->set('fiches_client', $this->Fiche->get_fiches_client($id));
	}*/

	public function produit($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Produit non valide'));
        $data=$this->Produit->get_info_produit($id);
		$this->set('data',$data[0]);
	}
	
}