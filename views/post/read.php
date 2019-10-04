<?php foreach($posts as $post) { ?>
  <p>
    Name: <h3><?php echo $post['title']; ?></h3>
     
    <p>Content: <?php echo $post['content']; ?> </p>
    <p>Date: <?php echo $post['date']; ?> </p>

    <a href='#'>Update Post</a> &nbsp; &nbsp;
    <a href='#'>Delete Post</a> &nbsp;
    <hr>
  </p>
<?php } ?>