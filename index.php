<?php 


// ============ Models ============
require 'Models/User.php';


// ============ Manager ============
require 'Models/Managers/DBManager.php';
require 'Models/Managers/UserManager.php';

// ============ Controllers ============
require 'Controllers/SecurityController.php';

//view



// les routeurs
// page par defaut
if(empty($_GET)){
    header('Location: index.php?controller=security&action=register');
}


//Login s'enregistrer
if($_GET['controller'] == "security"){

   $securityController = new SecurityController;

    if($_GET['action'] == "register"){
        $securityController->register();
    }

}





?>