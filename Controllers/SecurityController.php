<?php 
class SecurityController{

    private $userManager;

    public function __construct(){

        $this->userManager = new UserManager;

    }

    public function login(){
        $errors = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST' ){

            //si le user n'est pas rempli
            if(empty($_POST['username'])){
                $errors[] = "Veuillez saisir un nom d'utilisateur.";
            }

            //si le password est  vide
            if(empty($_POST['password'])){
                $errors[] = "Veuillez saisir un password";
            }

            // recuperer le user dans la bdd
            $user = $this->userManager->getByUsername($_POST['username']);
            if(is_null($user) || !password_verify($_POST['password'], $user->getPassword())){
                $errors[] = "les identifiants ne sont pas valides" ;
            }

            if(count($errors) == 0){
                
                $_SESSION['user'] = $user;
                var_dump($user->getUser_ID());
                var_dump($_SESSION['user']->getUser_ID());


                header("Location: index.php?controller=home");
               
            }
            
        }      
    }

    public function logout(){
        session_unset();
        session_destroy();
        header("Location: index.php?controller=security&action=login");

    }

    public function register(){
        $errors =[];

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            // verifier qu'il n'y a pas deux usernames identique
            if(!is_null($this->userManager->getByUsername($_POST['mail']))){
                $errors[]  = "Un compte avec ce nom d'utilisateur existe déjà";
            }

            // On vérifie que la confirmation du mot de passe est égale au mot de passe
            if($_POST["password"] != $_POST["password_confirm"]){
                $errors[] = "Les mots de passe ne sont pas identiques";
            }
           
            // si pas d'erreurs ajouter le username dans la bdd
            if(count($errors) == 0){

                //TODO image
                $image = "12";

                // hash du pawwsword
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
                // creation du nouveau user
                $user = new User(null, $_POST['username'], $_POST['mail'], $hash ,$image);
                
                // ajout du nouveau user dans la bdd
                $this->userManager->add($user);      
            }
        
        }


        require 'Views/security/register.php';
    }
    

}


?>