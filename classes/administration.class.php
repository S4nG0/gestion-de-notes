<?php

include 'personne.class.php';
include 'database.class.php';

class Administration extends Personne {

    private $db;

    public function Administration(){
        parent::Personne();
        $this->db=Database::getInstance();
    }
    public function recuperePromotion(){
        return $this->db->query("SELECT idPromotion,nom FROM promotion");
    }
    public function genererPseudo($nom,$prenom){
        return strtolower(substr($prenom,0,1).".".$nom);
    }
    public function ajouterEtudiant($idPromotion,$nom,$prenom,$adresse,$code_postal,$ville,$pseudo,$password){
        $this->db->query("INSERT INTO personne(idPersonne, idPromotion, idDepartement, nom, prenom,
                          adresse, code_postal, ville, statut, pseudo, password) VALUES ('',".$idPromotion.",
                          NULL,'".$nom."','".$prenom."','".$adresse."',".$code_postal.",'".$ville."','etudiant',
                          '".$pseudo."','".$password."')");
    }
}