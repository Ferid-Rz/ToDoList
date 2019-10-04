<?php

class PostController {
    public function read() {

      $posts = Post::all();
      require_once('views/post/read.php');
    }

    
    public function create() {

      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/post/create.php');
      }
      else { 
        Post::add();
             
            $posts = Post::all(); 
            require_once('views/post/read.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages');


        $posts = Post::find($_GET['id']);
      
        require_once('views/post/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            Post::update($id);
                        
            $posts = Post::all();
            require_once('views/post/read.php');
      }
      
    }
    public function delete() {
            Post::remove($_GET['id']);
            
            $posts = Post::all();
            require_once('views/post/read.php');
    }
      
}

?>