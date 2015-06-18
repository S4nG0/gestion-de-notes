<?php
$mysqli = new mysqli('localhost', 'root', '', 'projetphp_sql');

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

echo 'Succès... ' . $mysqli->host_info . "\n";

$mysqli->close();
?>