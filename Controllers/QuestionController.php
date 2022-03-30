<?php

    class QuestionController {
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


    }