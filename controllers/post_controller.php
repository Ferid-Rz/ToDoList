<?php

class PostController {
    public function read() {

      $posts = Post::all();
      require_once('views/post/read.php');
    }

    
    public function create() {

    }
    public function update() {
      
    }
    public function delete() {
          
    }
}
?>