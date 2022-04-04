<?php
class AnswerManager extends DbManager {


        public function add($answer){
    
          $query = $this->bdd->prepare("INSERT INTO answers (author_id, author_user_id, question_id, content) VALUES (:author_id, :author_user_id, :question_id, :content)");
                $query->execute([
                    "author_id"=> $answer->getAuthor_id(),
                    "author_user_id"=> $answer->getAuthor_user_id(),
                    "question_id"=> $answer->getQuestion_id(),
                    "content"=> $answer->getContent()
                ]);
        }

        public function getAll($id){
               
                $query = $this->bdd->prepare("SELECT * FROM answers WHERE question_id = :id") ;
                $query->execute([ "id"=> $id  ]);

                $resultats = $query->fetchAll();
            
                return $resultats;


        }       


        
}
