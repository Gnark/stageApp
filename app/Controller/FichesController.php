<?php

class FichesController extends AppController {
    public $helpers = array('Html', 'Form');
    public $uses=array('Fiche','Client','Produit');


    /*public function all_fiches() {
       $this->set('fiches', $this->Fiche->find('all'));
       $this->loadModel('Client');
       $data=$this->Client->query('SELECT * FROM clients WHERE id IN (SELECT client_id FROM fiches)');
       $this->set('data',$data);
   }*/

   //ouvre la vue qui montre toutes les fiches de prise en charge 
   public function all_fiches() {
    /*$this->set('fiches', $this->Fiche->find('all',
                                            'fields' => array('Fiche.id', 'Client.nom', 'Client.prenom', 'Modele.nom_modele', 'Fiche.date_debut'),

                                            ));*/
    $data=$this->Fiche->get_info_all_fiches();
    $this->set('data',$data);

   }
    //SELECT f.id, f.date_debut, cl.id, cl.nom, cl.prenom FROM clients cl, fiches f WHERE f.client_id = cl.id

   /*public function all_fiches() {

     $options['joins'] = array(
        array('table' => 'clients',
            'alias' => 'cl',
            'type' => 'inner',
            'conditions' => array(
                'client_id = cl.id'
            )
        ),
        array('table' => 'produits',
            'alias' => 'pr',
            'type' => 'inner',
            'conditions' => array(
                'cl.id = pr.client_id'
            )
        ),
    );


    $Client=ClassRegistry::init('Client');
    $clients=$Client->find('all',$options);
    $this->set(compact('fiches','clients'));
    $this->set('fiches',$this->Fiche->find('all',$options));


}*/


/*fonction mise dans le modele Fiche.php
public function get_info_fiche($id = null){
    if ($id == null)
        throw new NotFoundException(__('Fiche non valide'));
    return $this->Fiche->query("SELECT * 
        FROM clients cl, fiches f, produits pr, modeles m, admins adm, type_produits tp, adresses adr, villes v
        WHERE 
        f.id = ".$id."
        and f.client_id = cl.id 
        and f.produit_id = pr.id 
        and pr.modele_id = m.id
        and tp.id = m.type_produit_id
        and adr.id = cl.adresse_id
        and v.id = adr.ville_id
        and adm.id=f.admin_id");
}*/


//ouvre la vue de modification de la fiche de prise en charge modifiable
public function modif_fiche($id = null) {
    if (!$id) { //dans if, modifier pour afficher fiche vide à remplir
        //throw new NotFoundException(__('Fiche non valide'));
        $data=null;
        $this->set('data', $data);
    }
    else{
        $fiche = $this->Fiche->findById($id);
        if (!$fiche) {
            throw new NotFoundException(__('Fiche non valide'));
        }
        //$this->set('fiche', $fiche);
        $data=$this->Fiche->get_info_fiche($id);
        $this->set('data',$data[0]);
    }

}


//ouvre la vue qui affiche la fiche de prise en charge en non-modifiable
public function fiche($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Fiche non valide'));
    }

    /*$fiche = $this->Fiche->findById($id);
    if (!$fiche) {
        throw new NotFoundException(__('Fiche non valide'));
    }

    $options['joins']=array(
        array('table'=>'clients',
            'alias' => 'cl',
            'type' => 'inner',
            'conditions'=>array(
                'Fiche.client_id = cl.id',
            )
        ),
        array('table' => 'produits',
            'alias' => 'pr',
            'type' => 'inner',
            'conditions' => array(
                'Fiche.produit_id = pr.id',
            )
        ),
    );
    
    $options['conditions'] = array(
        
    
    $this->loadModel('Client');
    $dataClient=$this->Client->query('SELECT id, nom, prenom FROM clients WHERE id='.$fiche['Fiche']['client_id']);
    $this->set('dataClient',$dataClient);
    $this->set(compact('fiche','dataClient'));*/
    $data=$this->Fiche->get_info_fiche($id);
    $this->set('data',$data[0]);
}


public function beforeFilter(){
    parent::beforeFilter();
}

}

?>