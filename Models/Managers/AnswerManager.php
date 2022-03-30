<?php
class AnswersManager extends DbManager {

    

        public function add($answer){
    
          $query = $this->bdd->prepare("INSERT INTO answers ( null, author_id, author_user_id, question_id) VALUES (null, :author_id, :author_user_id, :question_id)");
                $query->execute([
                    "author_id"=> $answer->getAuthor_id(),
                    "author_user_id"=> $answer->getAuthor_user_id(),
                    "question_id"=> $answer->getPublication_date(),
                ]);
        }
}
