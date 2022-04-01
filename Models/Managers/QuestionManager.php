<?php

require_once 'DBManager.php';

require 'loader.php';


class QuestionManager extends DbManager {   

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


    // recuperer une question
    public function getOne($id){
        $retour = null;

        $req = $this->bdd->prepare("SELECT * FROM questions WHERE id = :id");

        $req->execute([
            "id"=> $id
        ]);

        $resultat = $req->fetch();

        if($resultat){
            $retour = new Question($resultat["id"], $resultat["subject"],
                $resultat["content"], $resultat["author_id"], $resultat["author_user_id"], $resultat["publication_date"]
            );
        }

       return $retour;
   }


    


    public function addQuestion($question){

        $query = $this->bdd->prepare("INSERT INTO questions ( subject, content, author_id, author_user_id, publication_date) VALUES (:subject, :content, :author_id, :author_user_id, :publication_date)");

            $query->execute([
                
                "subject"=> $question->getSubject(),
                "content"=> $question->getContent(),
                "author_id"=> $question->getAuthor_id(),
                "author_user_id"=> $question->getAuthor_user_id(),
                "publication_date"=> $question->getPublication(),
            ]);
    }

    public function deleteQuestion($id){
        $query = $this->bdd->prepare("DELETE FROM questions WHERE id = :id");
        $query->execute(["id"=>$id]);

    }



    public function edit($object){
        $query = $this->bdd->prepare("UPDATE questions SET subject = :subject WHERE id = :id");
        $query->execute([
            "id"=> $object->getID(),
            "subject"=>$object->getSubject(),
        ]);

        var_dump($query);

    }


    public function myQuestion($author_id){
        $arrayObjects = [];
        $query = $this->bdd->prepare("SELECT * FROM questions WHERE author_id = :author_id");
        $query->execute(['author_id' =>$author_id]);
        $resultats = $query->fetchAll();
        // var_dump($resultats);
        // die;
        foreach ($resultats as $resultat){
            $arrayObjects[] = new Question($resultat["id"], $resultat["subject"], $resultat["content"], $resultat["author_id"], $resultat["author_user_id"], $resultat["publication_date"]);

        }
        return $resultats;
    }

}


?>