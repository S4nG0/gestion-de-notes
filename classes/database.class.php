<?php
class Database
{
    private static $instance = NULL;

    public static function getInstance() {
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "phpspe_gestionDeNotes";

        if (!self::$instance) {
            self::$instance = new mysqli($server, $username, $password, $database);
        }
        return self::$instance;
    }

    private function __clone() {
        /* interdiction de cloner l'instance */
    }

}
?>