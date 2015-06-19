<?php


class Etudiant extends Personne{

    public function Etudiant(){
        $db = Database::getInstance();
        $req = $db->query("SELECT * FROM note WHERE idPersonne = '". $_SESSION['personne']->idPersonne ."'");
        $notes = $req->fetch_all();
        var_dump($notes);
        foreach($notes as $note){
            
        }
    }
}