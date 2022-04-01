<?php

    class QuestionController  {
        private $questionManager;

        public function __construct(){
            $this->questionManager = new QuestionManager();
        }
      
        public function listQuestion(){
            
            $resultats = $this->questionManager->getAll();

            require 'Views/question/listQuestions.php';           
               
        }

        public function addQuestion(){        
          
            
            $errors=[];
    
            if($_SERVER["REQUEST_METHOD"]=='POST'){
                
                //si le sujet n'est pas rempli
                if(empty($_POST['subject'])){
                    $errors[] = "Veuillez renseigner le sujet de votre question.";
                }

                //si la question n'est pas rempli
                if(empty($_POST['content'])){
                    $errors[] = "Veuillez renseignez votre question.";
                }

                if(count($errors) == 0){                
                    $question = new Question(null, $_POST['subject'], $_POST['content'],$_SESSION['user']->getID(), $_SESSION['user']->getUser_ID(), date('Y-m-d H:i:s') );
                    $this->questionManager->addQuestion($question);                   
                 header("Location: index.php?controller=question&action=listQuestion");           
                }          
           
            }
          require 'Views/question/addQuestion.php';

        
           
        }

        public function deleteQuestion(){
          
                $this->questionManager->deleteQuestion($_GET['id']);

                header("Location: Index.php?controller=question&action=listQuestion");
            
        }    

    }