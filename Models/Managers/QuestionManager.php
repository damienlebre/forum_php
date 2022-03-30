<?php
require_once 'DBManager.php';

class QuestionManager extends DbManager {

    // public function add(Question $question){

    //   $query = $this->bdd->prepare("INSERT INTO questions ( subject, content, author_id, author_user_id, publication_date) VALUES (:subject, :content, :author_id, :author_user_id, :publication_date)");
    //         $query->execute([
    //             "subject"=> $question->getSubject(),
    //             "content"=> $question->getContent(),
    //             "author_id"=> $question->getAuthor_id(),
    //             "author_user_id"=> $question->getAuthor_user_id(),
    //             //"publication_date"=> $question->getPublication_date(),
    //         ]);
    // }

    public function getAll(){
        $arrayObjects = [];
        $query = $this->bdd->prepare(" SELECT * FROM questions ");
        $query->execute();
        $resultats = $query->fetchAll();
        foreach ($resultats as $resultat){
            $arrayObjects[] = new Question($resultat["id"], $resultat["subject"], $resultat["content"], $resultat["author_id"], $resultat["author_user_id"], $resultat["publication_date"]);

        }
        return $arrayObjects;
    }
}


?>