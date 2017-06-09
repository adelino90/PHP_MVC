<?php
session_start();
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
      case 'login':
      // we need the model to query the database later in the controller
      require_once('models/login.php');
      $controller = new LoginController();
    break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error','login','logout'],
                       'posts' => ['index', 'show', 'add', 'save','update','delete'],
                       'login'=> ['login','register']);
//session_destroy();
      if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
              if(!empty($_SESSION['user']) ){
                call($controller, $action);
              }
              else{
                if($controller =='login' && $action == 'login')  
                  call($controller, $action);
                else
                  call('pages','login'); 
              }
        } else {
          call('pages', 'error');
        }
      } else {
        call('pages', 'error');
      }

?>