<?php
    class ctrlGeneral{
        private $vue;
        private $model;
        private $user;

        function __construct(){
            $this->vue=new viewGenerale();
            $this->model=new modelGeneral();
        }

        public function getConnection(){
            $this->view->afficherConnection();
        }

        public function getAuthentification(){
            $this->view->afficherConnection();
        }

        public function verifierAuthentification(){
            $this->user=new Compte($_POST);
            $verifAuthentification=$this->model->enregistrerFormulaire($this->user);
            if ($verifAuthentification){

            }else{
                
            }
        }




        private function gererSession($obj){
            
        }

        private function verifier(){
            
        }
    
    }
?>