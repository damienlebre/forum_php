<?php

class DbManager {
    protected $bdd;
    private $dbHost = "localhost";
    private $dbName = "forum_php";
    private $dbUser = "root";
    private $dbPass = "";


    public function __construct(){

        $this->bdd = $this->connexionBdd() ;
        
    }

    public function connexionBdd(){
 
        $mysqli = new mysqli($this->dbHost, $this->dbUser , $this->dbPass, $this->dbName);
        if ($mysqli->connect_errno) {
            echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        echo $mysqli->host_info . "\n";

        return $mysqli;
    }

}

