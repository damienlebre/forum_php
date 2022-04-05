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
                    header("Location: index.php?controller=question&action=listQuestion");              
                }           
            }  
            require 'Views/security/login.php';       
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
                    
                   
                    if(isset($_POST["password"]) && isset($_POST["password_confirm"])){
                        if(preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/', $_POST['password'])){
                             // si pas d'erreurs ajouter le username dans la bdd
                            if(count($errors) == 0){
                                // hash du password
                                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                            
                                // creation du nouveau user
                                $user = new User(null, $_POST['username'], $_POST['mail'], $hash ,'defaut.png');
                                
                                // ajout du nouveau user dans la bdd
                                $this->userManager->add($user);  
                                
                            }
                              
                        }else{
                            $errors[]="Merci de choisir un mot de passe au format valide .";
                            
                        }
                    }

                   
                
                }
                require 'Views/security/register.php';
            }


            public function profil(){
            $errors =[];


            if($_SERVER["REQUEST_METHOD"]=="POST"){
                // verifier qu'il n'y a pas deux usernames identique
                if(!is_null($this->userManager->getByUsername($_POST['username']))){
                    $errors[]  = "Un compte avec ce nom d'utilisateur existe déjà";
                }

                // On vérifie que la confirmation du mot de passe est égale au mot de passe
                if($_POST["password"] != $_POST["password_confirm"]){
                    $errors[] = "Les mots de passe ne sont pas identiques";
                }
            
                $fileNameNew = "";
                if(isset($_POST['submit'])){
                    
                    $fileName = $_FILES['image']['name'];
                    $fileTmpName = $_FILES['image']['tmp_name'];
                    $fileSize = $_FILES['image']['size'];
                    $fileError = $_FILES['image']['error'];
                    $fileExt = explode('.', $fileName);
                    $fileActualExt = strtolower(end($fileExt));
                    $allowed = ['jpg', 'jpeg', 'png'];
                    if(in_array($fileActualExt, $allowed) && $fileError === 0 && $fileSize < 2500000){
                        $fileNameNew = uniqid('', true) . '.' . $fileActualExt;
                        $fileDestination = 'Public/uploads/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $oldImage = 'Public/uploads/' . $_SESSION['user']->getImage();
                        if(is_file($oldImage)&& $oldImage != 'Public/uploads/defaut.png'){
                            unlink($oldImage);
                        }
                        
                    }
                   
                }
                
                // si pas d'erreurs ajouter le username dans la bdd
                if(count($errors) == 0){
                    
                  
                    
                    // Conserver les infos existante si on ne les modifie pas
                    
                    // Modification du profil
                    if($_POST['username'] === ""){
                        $newUserName = $_SESSION['user']->getUser_ID();
                        
                    }else{
                        $newUserName = $_POST['username'];
                    }
                   
                    if($_POST['mail'] === ""){
                        $newMail = $_SESSION['user']->getEmail();
                        
                    }else{
                        $newMail = $_POST['mail'];
                        
                    }
                    if($_POST['password'] === ""){
                        $newPassword = $_SESSION['user']->getPassword();
                        
                    }else{
                        $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    }

                    if($_POST["password"] != $_POST["password_confirm"]){
                        $errors[] = "Les mots de passe ne sont pas identiques";
                    }
                    
                    $user = new User($_SESSION['user']->getID(), $newUserName, $newMail, $newPassword , $fileNameNew);
                    $_SESSION['user'] = $user;
                    // modif de user dans la bdd
                    $this->userManager->edit($user);      
                }
                
            }
            require 'Views/security/profil.php';
        }
    } 
    


?>