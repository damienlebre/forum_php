<?php

include_once "include.php";

// ============ Models ============
require './loader.php';
require 'views/navbar.php';


// les routeurs
// page par defaut
if(empty($_GET)){
    header('Location: index.php?controller=home');
}

if($_GET['controller'] == "home"){
    require 'Views/home/home.php';
}


// ===================== Security =====================
if($_GET['controller'] == "security"){

   $securityController = new SecurityController;

    if($_GET['action'] == "register"){
        $securityController->register();
    }


    if($_GET['action'] == "login"){             


        $securityController->login();
       

    }

    if($_GET["action"] == "logout"){
        $securityController->logout();
    }



    if($_GET["action"] == "profil"){
        $securityController->profil();
    }

}

// ===================== question =====================
if($_GET['controller'] == "question"){

    $questionController = new QuestionController;
    $answerController = new AnswerController;
 
     if($_GET['action'] == "listQuestion"){
         $questionController->listQuestion();        
     }

    if($_GET['action']== "addQuestion"){
       $questionController->addQuestion();
    }
    if($_GET['action']== "delete"){
        $questionController->deleteQuestion();
     }

     if($_GET['action'] == 'detail' && array_key_exists("id", $_GET)){
        $answerController->detail($_GET["id"]);
    }
    if($_GET['action'] == "MyQuestionList"){
        $questionController->myQuestion();        
    }
}


// ===================== answer =====================
if($_GET['controller'] == 'answer'){

    $answerController = new AnswerController ;

    if($_GET['action'] == 'add' && array_key_exists("id", $_GET)){
        $answerController->add($_GET["id"]);
    }

    

   
}
