<?php
class AnswerController  {

    private $answerManager;

    public function __construct()
    {
        $this->answerManager = new AnswerManager();
        $this->questionManager = new QuestionManager();
    }

    public function add($id){
        // recupérer la bonne question avec le bon id
        $question = $this->questionManager->getOne($id);

        $errors=[];
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){

             //si la reponse n'est pas vide
             if(empty($_POST['content'])){
                $errors[] = "Veuillez renseigner le sujet de votre réponse.";
                var_dump( $errors);
            }

            if(count($errors) == 0){                
                $answer = new Answer(null, $_SESSION['user']->getID(), $_SESSION['user']->getUser_ID(), $_GET['id'], $_POST['content']  );
                $this->answerManager->add($answer);                   
             header("Location: index.php?controller=question&action=listQuestion");           
            }  

        }
        
        require 'Views/answer/addAnswer.php';       
       
    }

    public function detail($id){

        

        $question = $this->questionManager->getOne($id);
        $answers = $this->answerManager->getAll($id);
        
        if($answers !=null){
            require 'Views/answer/detailAnswer.php';

        } else {
            echo 'pas de réponse encore';
        }

       
    }

}
