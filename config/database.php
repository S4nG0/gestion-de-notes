<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "projetphp_sql";

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

echo 'Connexion réussie... ' . $mysqli->host_info . "\n";


echo 'test';

var_dump($mysqli);

$mysqli->close();
?>