<?php
// class QuestionManager extends DbManager {

//     // Méthode qui ne prend pas de paramètre
//     // Elle retourne un tableau d'objet Category
//     public function getAll(){
//         // On cré un tableau vide. On ira y empiler nos
//         // objets plus tard
//         $arrayObjects = [];

//         // On prépare une requête qui selectionnera
//         // toutes les catégories
//         $query = $this->bdd->prepare('SELECT * FROM questions');
//         // On execute cette requête
//         $query->execute();

//         // On réccupére les résultats de la requête
//         $resultats = $query->fetchAll();

//         // On parcours tous les résultat de la requête
//         foreach ($resultats as $resultat){
//             // Pour chacun de ces resultats, on rempli le tableau
//             // que l'on a créé à la ligne 9
//             // On fait appel au constructeur de notre Objet Question
//             // (Models/Questions.php).
//             // ATTENTION a l'ordre des éléments
//             // Pour chaque résultats, on ajoute un élément dans notre
//             // tableau d'objet
//             $arrayObjects[] = new Question($resultat["id"], $resultat["subject"], $resultat["content"],$resultat["author_id"], $resultat["author_user_id"], $resultat["publication_date"]);
//         }

//         // On retourne notre tableau d'objets
//         return $arrayObjects;
//     }

//     // Méthode qui supprime un élément à partir du paramètre id qu'on lui passe
//     public function delete($id){
//         // On fait une requête préparé qui supprime un élément dans notre
//         // bdd à partir de son id
//         $query = $this->bdd->prepare("DELETE FROM questions WHERE id = :id");
//         // On execute la requête en lui passant la valeur de (':id')
//         // La méthode execute prend en paramètre un tableau clé => valeur
//         $query->execute([
//             "id"=> $id
//         ]);
//     }

//     // Appelé par le controlleur après vérification des erreurs de saisie
//     public function add($object){
//         // Elle effectue une requête préparée pour insérer une ligne
//         // dans la table Question. On insère pas l'id qui sera généré par la BDD
//         $query =
//             $this->bdd->prepare("INSERT INTO questions (subject, content, author_id, author_user_id) VALUES (:subject, :content, :author_id, :author_user_id)");
//         // J'execute ma requête en lui passant le parametre pour la clé :subject
//         // L'attribut subject, etc de l'objet est privé donc je passe par l'accesseur getSubject
//         $query->execute(["subject"=> $object->getSubject()]);
//         $query ->execute(["content"=> $object->getContent()]);
//         $query ->execute(["author_id"=> $object->getAuthor_id()]);
//         $query ->execute(["author_user_id"=> $object->getAuthor_user_id()]);
        
//     }

//     // Prend un objet Question en paramètre
//     public function edit($object){
//         // On prépare une requête qui va mettre à jour la ligne dans la table question
//         // qui correspond à l'id de l'objet passé en paramètre
//         $query = $this->bdd
//             ->prepare("UPDATE questions SET label = :label WHERE id = :id");

//         // On execute notre requête en lui passant tous les paramètres nécessaire (dans ce cas label)
//         $query->execute([
//             "id"=> $object->getId(),
//             "content"=> $object->getContent(),
//             "author_id"=> $object->getAuthor_id(),
//             "author_user_id"=> $object->getAuthor_user_id(),
//         ]);
//     }

//     // Prend en paramètre un id et retourne l'objet qui lui est associé
//     public function getOne($id)
//     {
//         // On initialise une variable null
//         $retourObjet = null;

//         // On selectionne dans notre db la ligne qui correspond à l'id passé en paramètre
//         $query = $this->
//         bdd->prepare("SELECT * FROM questions WHERE id = :id");

//         // On execute notre requête en lui passant l'id ajouté en paramètre
//         $query->execute(["id"=> $id]);

//         // On réccupére le resultat (vu que l'id est unique, un seul possible)
//         $result = $query->fetch();
//         if($result){
//             // On cré un objet question que l'on stock dans la variable retourObjet
//             $retourObjet = new Question($result["id"], $result["subject"], $result["content"],$result["author_id"], $result["author_user_id"], $result["publication_date"]);
//         }

//         // On retourne notre objet
//         return $retourObjet;
//     }


// }


?>