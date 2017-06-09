<?php
  class Login {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $user;


    public function __construct($user) {
      $this->user      = $user;
      
    }

    public static function login($user,$pass) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $req = $db->prepare('SELECT * FROM user WHERE username = :user && password = :pass');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('user' => $user,'pass' => $pass));
      $valid = $req->fetch();
      if(count($valid)>0){
        return count($valid['username']);
      }
      else{
         return count($valid['username']);
      }
    }
    
      

  }
?>