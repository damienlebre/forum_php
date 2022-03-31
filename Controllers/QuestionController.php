<?php

    class QuestionController  {
        private $questionManager;

        public function __construct(){
            $this->questionManager = new QuestionManager();
        }

        // public function add($question){
        //     //$question = new Question (null, $_POST['question'],$_POST['content'] );
        //     $this->questionManager->add($question);
        // }

        public function listQuestion(){
            
            $resultats = $this->questionManager->getAll();

            require 'Views/question/listQuestions.php'; 
           
           
               
        }

        public function addQuestion(){

            
           
            
          
            require 'Views/question/addQuestion.php';
            // var_dump($_SESSION['user']->getID());
           
           
            $question = new Question(null, $_POST['subject'], $_POST['content'],$_SESSION['user']->getID(), $_SESSION['user']->getUser_ID(), date('Y-m-d H:i:s') );
             $this->questionManager->addQuestion($question);
            header("Location: index.php?controller=question&action=listQuestion");
        }
    }