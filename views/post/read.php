<?php foreach($posts as $post) { ?>
  <p>
    Name: <h3><?php echo $post['title']; ?></h3>
     
    <p>Content: <?php echo $post['content']; ?> </p>
    <p>Date: <?php echo $post['date']; ?> </p>

    <a href='?controller=post&action=update&id=<?php echo $post['id']; ?>'>Update Post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=delete&id=<?php echo $post['id']; ?>'>Delete Post</a> &nbsp;
    <hr>
  </p>
<?php } ?>