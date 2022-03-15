<?php
class User{

    private $id;
    private $user_id;
    private $email;
    private $password;
    private $image

    public function __construct($id, $user_name, $email, $password,$image){
        $this->id=$id;
        $this->user_name=$user_name;
        $this->email=$email;
        $this->password=$password;
        $this->image=$image;
    }
    

    public function getID(){
        return $this->id;
    }

    public function getUser_Name(){
        return $this->user_name;
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
    

    public function setUser_Name{
        $this->username = $user_name;
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
