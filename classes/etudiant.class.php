<?php


class Etudiant extends Personne{

    public function Etudiant(){
        parent::Personne();
        $db = Database::getInstance();
        $req = $db->query("SELECT * FROM note WHERE idPersonne = '". $_SESSION['personne']->idPersonne ."'");
        
    }
}