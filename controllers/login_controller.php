<?php
  class LoginController {
      
     public function login() {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $return = Login::login($user,$pass);
        if($return!= ''){
            header('Location: ?controller=posts&action=index');
        }
        else
            header('Location: ?controller=pages&action=login');
    }
  }
?>