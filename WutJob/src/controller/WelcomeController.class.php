<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
use libs\system\Controller;
use src\model\CvRepository;
class WelcomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    /** 
     * use: localhost/projectName/Welcome/
     */
    public function index(){  
        return $this->view->load("welcome/index");   
    }  

    public function Login(){  
        return $this->view->load("welcome/Login");   
    }  

    public function Inscription(){  
        return $this->view->load("welcome/Inscription");   
    }  


    public function offres(){  
        return $this->view->load("welcome/offres");   
    }  

    public function presentation(){  
        return $this->view->load("welcome/presentation");   
    }  

} 
?>