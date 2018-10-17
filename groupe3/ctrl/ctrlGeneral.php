<?php
    class ctrlGeneral{
        private $vue;
        private $model;
        private $user;

        function __construct(){
            $this->vue=new viewGenerale();
            $this->model=new modelGeneral();
        }


        public function getForm(){
            $this->view->afficherForm();
        }

        public function enregForm(){
            $this->user=new user($_POST);
            $enregistrement=$this->model->enregistrerFormulaire($this->user);

        }

        public function getModifierCompte(){
            $this->view->afficherModifierCompte();
        }

        public function modifierCompte(){
            $this->user=new cpte($_POST);
            $enregistrement=$this->model->enregistrerFormulaire($this->user);

        }

        public function getConnection(){
            $this->view->afficherConnection();
        }

        public function getAuthentification(){
            $this->view->afficherConnection();
        }

        public function verifierAuthentification(){
            $this->user=new cpte($_POST);
            $enregistrement=$this->model->enregistrerFormulaire($this->user);

        }




        private function gererSession(){

        }

        private function verifier(){
            
        }
    
    }
?>