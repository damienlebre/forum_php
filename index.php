<?php 


// ============ Models ============
require 'loader.php';


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

//Poster une question
if($_GET['controller'] == "question"){

    $questionController = new QuestionController;
 
     if($_GET['action'] == "addQuestion"){
         $questionController->add();
     }

    }

//Répondre à une question
if($_GET['controller'] == "answer"){

    $answerController = new AnswerController;
 
     if($_GET['action'] == "addanswer"){
         $questionController->add();
     }

    }


?>