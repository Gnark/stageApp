<?php


App::uses('AppModel', 'Model');

class Probleme extends AppModel{
	public $name = 'Probleme';
	public $hasMany = array('Client', 'Solution', 'Intervention');

	public function get_info_all_problemes(){

		return $this->query('SELECT id, description_probleme
							FROM problemes');


	}

	public function get_info_probleme($id = null){
		if ($id == null)
        	throw new NotFoundException(__('Problème non valide'));

        $probleme = $this->query("SELECT pr.id, pr.description_probleme, s.description_solution
        					FROM problemes pr, solutions s, probleme_avec_solutions ps
        					WHERE ps.probleme_id = pr.id
        					AND ps.solution_id = s.id
        					AND pr.id = ".$id
        				);

        if ($probleme == null)
        	return $this->query("SELECT pr.id, pr.description_probleme
        					FROM problemes pr
        					WHERE pr.id = ".$id
        				);
        return $probleme;

	}


}

?>