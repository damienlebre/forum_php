<?php
class Answer{
    private $id;
    private $author_id;
    private $author_user_id;
    private $question_id;   
    private $content;

    public function __construct($id, $author_id, $author_user_id, $question_id, $content)
    {
        
    }


    public function getID(){
        return $this->id;
    }

    public function getAuthor_id(){
        return $this->author_id;
    }

    public function getAuthor_user_id(){
        return $this->author_user_id;
    }

    public function getQuestion_id(){
        return $this->question_id;
    }

    public function getContent(){
        return $this->content;
    }

    public function setAuthor_id($author_id){
        $this->author_id=$author_id;
    }

    public function setAuthor_user_id($author_user_id){
        $this->author_user_id=$author_user_id;
    }

    public function setQuestion_id($question_id){
        $this->question_id=$question_id;
    }

    public function setContent($content){
        $this->content=$content;
    }

   
    
    
    

       
}

