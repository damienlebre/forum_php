<?php
class Question{
   private $id;
   private $subject;
   private $content;
   private $author_id;
   private $author_user_id;
   private $publication;


   public function __construct($id, $subject, $content, $author_id, $author_user_id, $publication){
      $this->id = $id;
      $this->subject = $subject;
      $this->content = $content;
      $this->author_id = $author_id;
      $this->author_user_id = $author_user_id;
      $this->publication = $publication;

   }
   public function getID(){
    return $this->id;
   }

   public function getSubject(){
    return $this->subject;
   }

   public function getContent(){
    return $this->content;
   }

   public function getAuthor_id(){
    return $this->author_id;
   }

   public function getAuthor_user_id(){
    return $this->author_user_id;
   }

   public function getPublication(){
    return $this->publication;
   }

   public function setSubject($subject){
    $this->subject=$subject;
   }
   
   public function setContent($content){
    $this->content=$content;
   }

   public function setAuthor_id($author_id){
    $this->author_id=$author_id;
   }

   public function setAuthor_user_idt($author_user_id){
    $this->author_user_id=$author_user_id;
   }

   public function setPublication($publication){
    $this->publication=$publication;
   }
}