<?php
    class UserManager extends DbManager{
        
        public function getByUsername($user_id){
            $retour = null;
            $query = $this->bdd->prepare("SELECT * FROM users WHERE user_id = :user_id");
            $query->execute([
                "user_id"=> $user_id
            ]);

            $result = $query->fetch();

            if($result){
                $retour = new User($result["id"], $result["user_id"], $result["email"], $result["password"], $result["image"]);
            }

            return $retour;
        }

        

        public function add($user){
            $query = $this->bdd->prepare("INSERT INTO users (user_id, email, password, image) VALUES (:user_id, :email, :password, :image)");
            $query->execute([
                "user_id"=> $user->getUser_ID(),
                "password"=> $user->getPassword(),
                "email"=> $user->getEmail(),
                "image"=> $user->getImage()
            ]);
        }
        
        public function edit($user){
            // var_dump($user);
            // var_dump($_SESSION);
            // var_dump($_SESSION['user']->getID());
            
            $query = $this->bdd->prepare("UPDATE users SET  user_id = :user_id, email = :email, password = :password, image = :image WHERE id = :id");
            $query->execute([
                "id" => $user->getID(),
                "user_id"=> $user->getUser_ID(),
                "password"=> $user->getPassword(),
                "email"=> $user->getEmail(),
                "image"=> $user->getImage()
            ]);
        }
    }
?>
