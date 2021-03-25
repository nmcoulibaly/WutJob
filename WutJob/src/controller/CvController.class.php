<?php
use libs\system\Controller;
use src\model\CvRepository;
class CvController extends Controller
{
        public function __construct()
        {
                parent::__construct();
        }

        public function cv(){  
            return $this->view->load("Cv/cv");   
        }  

public function insert()
            {
                extract($_POST);
            
                $cv = new Cv();
                var_dump($cv);
                $cv->setNom($nom);
                $cv->setAge($age);
                $cv->setAdresse($adresse);
                $cv->setSpecialite($specialite);
                $cv->setNiveau($niveau);
                $cv->setExperience($experience);
                $cv->setSex($sex);
                $cv->setNumero($numero);
                $cv->setEmail($email);
                $cv->setAvatar($avatar);


                $cvdb = new CvRepository();
                $cvdb->insert($cv);

                return $this->view->load("Cv/cv");
            }


}

?>