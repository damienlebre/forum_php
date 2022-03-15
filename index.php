<?php 


// ============ Models ============
require 'Models/User.php';


// ============ Manager ============
require 'Models/Managers/DBManager.php';
require 'Models/Managers/UserManager.php';

// ============ Controllers ============


//view



// les routeurs
//Login s'enregistrer
if($_GET['controller'] == "security"){

    // todo instancier le controller

    if($_GET['action'] == "register"){
        //todo 
    }

}





?>