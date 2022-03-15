<?php
class User{

    private $id;
    private $user_name;
    private $email;
    private $password;
    private $image;

    public function __construct($id, $user_id, $email, $password,$image){
        $this->id=$id;
        $this->user_id=$user_id;
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

    public function setUser_ID($user_id){

        $this->user_id = $user_id;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setImage($image){
        $this->image = $image;
    }
}   
