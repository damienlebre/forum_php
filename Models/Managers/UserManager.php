<?php
    class UserManager extends DBManager{
        public function getByUsername($user_id){
            $retour = null;
            $query = $this->bdd->prepare("SELECT * FROM users WHERE user_id = :user_id");
            $query->execute([
                "user_id"=> $user_name
            ]);

            $result = $query->fetch();

            if($result){
                $retour = new User($result["id"], $result["user_id"], $result["email"], $result["password"], $result["image"]);
            }

            return $retour;
        }

        public function add($user){
            $query = $this->bdd->prepare("INSERT INTO user ( user_id, email, password, image) VALUES (:user_id, :email, :password, :image)");
            $query->execute([
                "user_id"=> $user_id->getUsername(),
                "password"=> $user->getPassword(),
                "email"=> $user->getEmail(),
                "image"=> $user->getImage()
            ]);
        }
    }
?>
