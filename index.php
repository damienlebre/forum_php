<?php 


// ============ Models ============
require 'Models/User.php';
require 'Models/Question.php';
require 'Models/Answer.php';


// ============ Manager ============
require 'Models/Managers/DBManager.php';
require 'Models/Managers/UserManager.php';
require 'Models/Managers/QuestionManager.php';


// ============ Controllers ============
require 'Controllers/SecurityController.php';



//view



// les routeurs
// page par defaut
if(empty($_GET)){
    header('Location: index.php?controller=home');
}


if($_GET['controller'] == "home"){
    require 'Views/home/home.php';
}


//Login s'enregistrer
if($_GET['controller'] == "security"){

   $securityController = new SecurityController;

    if($_GET['action'] == "register"){
        $securityController->register();
    }

    if($_GET['action'] == "login"){
        $securityController->login();
    }

}





?>