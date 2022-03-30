<?php

class DBManager {
    protected $bdd;
    private $dbHost = "localhost";
    private $dbName = "forum_php";
    private $dbUser = "root";
    private $dbPass = "";


    public function __construct(){
        try{
            $this->bdd = new PDO("mysql:dbname=".$this->dbName.";charset=UTF8;host=".$this->dbHost, $this->dbUser, $this->dbPass);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(Exception $ex) {
        die('Error '. $ex->getMessage());
        } ;
      
        }
       
        
    }

    
