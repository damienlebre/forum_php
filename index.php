<?php




// ============ Models ============
require 'loader.php';
require 'views/menu.php';



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
        // TODO enlever le require
       require 'Views/security/login.php';
        $securityController->login();
    }

    if($_GET["action"] == "logout"){
        $securityController->logout();
    }


}

// question
if($_GET['controller'] == "question"){

    $questionController = new QuestionController;
 
     if($_GET['action'] == "listQuestion"){
         $questionController->listQuestion();
        
     }

    }




//Répondre à une question
if($_GET['controller'] == "answer"){

    // $answerController = new AnswerController;
 
    //  if($_GET['action'] == "addanswer"){
    //      $questionController->add("test");
    //  }

     }


?>