<?php

class Etudiant extends Personne{

    public function Etudiant(){
        
        $db = Database::getInstance();
        $req = $db->query("SELECT * FROM note WHERE idPersonne = '". $_SESSION['personne']->idPersonne ."'");
        var_dump($req);
    }
}