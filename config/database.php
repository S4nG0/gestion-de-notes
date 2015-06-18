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

echo 'Succès... ' . $mysqli->host_info . "\n";

$mysqli->close();
?>