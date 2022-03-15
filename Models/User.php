<?php
class User{

    private $id;
    private $user_id;
    private $email;
    private $password;
    private $image

    public function __construct($id, $user_id, $email, $password,$image){
        $this->id=$id;
        $this->user_name=$user_id;
        $this->email=$email;
        $this->password=$password;
        $this->image=$image;
    }
    

    public function getID(){
        return $this->id;
    }

    public function getUser_ID(){
        return $this->user_id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getImage(){
        return $this->image;
    }
    

    public function setUser_ID{
        $this->user_id = $user_id;
    }

    public function setEmail{
        $this->email = $email;
    }

    public function setPassword
        $this->password = $password;
    }

    public function setImage{
        $this->image = $image;
    }
}   
