<?php

namespace src\model; 

use libs\system\Model; 
	
class CvRepository extends Model{
	
	
	public function __construct(){
		parent::__construct();
    }

    public function getAll()
    {
        return $this->db->getRepository("Cv")->findAll();
    }

    public function insert($cv)
    {
       $this->db->persist($cv);   
       $this->db->flush(); 
    }
}