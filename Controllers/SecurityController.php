<?php 
class SecurityController{

    private $userManager;

    public function __construct(){

        $this->userManager = new UserManager;

    }

    public function register(){
        

        require 'Views/security/register.php';
    }
    

}


?>