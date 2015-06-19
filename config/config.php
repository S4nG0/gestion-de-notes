<?php

session_start();

header('Content-Type: text/html; charset=utf-8');

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});



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