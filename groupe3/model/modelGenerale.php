<?php
    class modelGeneral{
        private $dao;

        function __construct(){
            $this->dao=new viewGenerale();
        }

        public function enregistrerFormulaire($obj){
            if ($obj->getTypetape()=="email"){
                $requete = "SELECT `mot de passe` FROM `User` WHERE `email`='".$obj->getIdentifiant()."'";
            }else if ($obj->getTypetape()=="pseudo"){
                $requete = "SELECT `mot de passe` FROM `User` WHERE `pseudo`='".$obj->getIdentifiant()."'";
            }

            $reponse=$this->dao->requeteMysql($requete);
        }
    }
?>