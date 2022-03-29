<?php
// class AnswerController extends AuthenticatedController {

//     private $answerManager;

//     public function __construct()
//     {
//         parent::__construct();
//         $this->answerManager = new AnswerManager();
//     }

//     public function listTopic(){

//         $answers = $this->answerManager->getAll();

//         require 'Views/answers/list.php';
//     }

//     public function detail($id){
//         $answer = $this->answerManager->getOne($id);

//          require 'Views/answers/detail.php';

//     }

//     public function delete($id)
//     {
//         $this->topicManager->delete($id);

//         header("Location: index.php?controller=answer&action=list");
//     }

//     public function add()
//     {
//         $errors = [];

//         if($_SERVER["REQUEST_METHOD"] == "POST"){
            
//             if(empty($_POST["contenu"])){
//                 $errors[] = "Veuillez saisir une réponse";
//             }
            
//         }

//         require "Views/answers/addAnswer.php";


//     }

// }
