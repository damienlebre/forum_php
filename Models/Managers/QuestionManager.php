<?php

class QuestionManager {

    public function add($question){

      $query = $this->bdd->prepare("INSERT INTO questions ( subject, content, author_id, author_user_id, publication_date) VALUES (:subject, :content, :author_id, :author_user_id, :publication_date)");
            $query->execute([
                "subject"=> $question->getSubject(),
                "content"=> $question->getContent(),
                "author_id"=> $question->getAuthor_id(),
                "author_user_id"=> $question->getAuthor_user_id(),
                "publication_date"=> $question->getPublication_date(),
            ]);
    }

}


?>