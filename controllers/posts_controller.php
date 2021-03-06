<?php
  class PostsController {
    public function index() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('views/posts/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }
      public function add() {
      require_once('views/posts/add.php');
    }
      public function save() {
        $author = $_POST['auth'];
        $content = $_POST['content'];
        $return = Post::save($author,$content);
        if($return){
          echo json_encode(array('success'=>true));
        }
    }
     public function update() {
        $author = $_POST['auth'];
        $content = $_POST['content'];
        $id = $_POST['id'];
        $return = Post::update($author,$content,$id);
        if($return){
          echo json_encode(array('success'=>true));
        }
    }
    public function delete() {
        $id = $_POST['id'];
        $return = Post::delete($id);
        if($return){
          echo json_encode(array('success'=>true));
        }
    }
  }
?>