<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$database = "phpspe_gestionDeNotes";

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}



/**
 *
 * LISTE DE REQUETES DONT ON POURRAIT AVOIR BESOIN
 *
 * SELECT toutes les personnes
 * SELECT * FROM personne
 *
 * SELECT tout les etudiants
 * SELECT * FROM personne WHERE idPromotion is not NULL
 *
 * SELECT tout les administratif
 * SELECT * FROM personne WHERE idDepartement is not NULL
 *
 * SELECT tout les enseignants
 * SELECT * FROM personne WHERE idPromotion is NULL and idDepartement is NULL
 *
 * SELECT des etudiants par promotion en fonction du nom de cette promo
 * SELECT * FROM personne INNER JOIN promotion ON personne.idPromotion = promotion.idPromotion AND promotion.nom = ""
 *
 *
 */

?>