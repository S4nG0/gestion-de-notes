<?php

class Etudiant extends Personne {

    public $etudiant;

    public function Etudiant() {

        $db = Database::getInstance();

        //On selectionne sa classe
        $req = $db->query("SELECT * FROM promotion WHERE idPromotion = '" . $_SESSION['personne']->idPromotion . "'");
        $etudiant['classe'] = $req->fetch_assoc();

        //On selectionne le departement de la classe
        $req = $db->query("SELECT * FROM departement WHERE idDepartement = '" . $etudiant['classe']['idDepartement'] . "'");
        $etudiant['departement'] = $req->fetch_assoc();

        //On selectionne les UE du departement
        $req = $db->query("SELECT * FROM unite_enseignement WHERE idDepartement = '" . $etudiant['departement']['idDepartement'] . "'");
        while ($data = $req->fetch_assoc()) {
            $UEs[] = $data;
        }

        $unites = array();
        $unity = array();
        $k = 0;
        foreach ($UEs as $UE) {
            $req = $db->query("SELECT * FROM module WHERE idUE = '" . $UE['idUE'] . "'");
            $modules = array();
            while ($data = $req->fetch_assoc()) {
                array_push($modules, $data);
            }

            $unity[$k] = $UE;
            $i = 0;
            foreach ($modules as $module) {
                $epreuves = array();
                $req = $db->query("SELECT * FROM epreuve WHERE idModule = '" . $module['idModule'] . "'");
                while ($data = $req->fetch_assoc()) {
                    array_push($epreuves, $data);
                }
                $unity[$k][$i] = $module;
                $j = 0;
                foreach ($epreuves as $epreuve) {
                    $req = $db->query("SELECT * FROM note WHERE idEpreuve = '" . $epreuve['idEpreuve'] . "'");
                    $epreuve['note'] = $req->fetch_assoc();
                    $unity[$k][$i][$j] = $epreuve;
                    $j++;
                }

                $i++;
            }
            $k++;

            $UE['modules'] = $modules;

            array_push($unites, $UE);
        }

        $etudiant['UEs'] = $unity;
        $this->etudiant = $etudiant;
        return $this->etudiant;
    }

}
