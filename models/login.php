<?php
  class Login {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $user;


    public function __construct($username,$name) {
      $this->user      = $user;
      $_SESSION['user'] =  $user;
      $_SESSION['wholename'] = $name;
    }

    public static function login($user,$pass) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $req = $db->prepare('SELECT * ,CONCAT(firstname," ",lastname) as wholename FROM user WHERE username = :user && password = :pass');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('user' => $user,'pass' => $pass));
      $valid = $req->fetch();
      if(count($valid)>0){
        //$session = new Login($valid['username'],$valid['wholename']);
        $_SESSION['user'] =  $valid['username'];
        $_SESSION['wholename'] = $valid['wholename'];
        return count($valid['username']);
      }
      else{
         return count($valid['username']);
      }
    }
    
      

  }
?>