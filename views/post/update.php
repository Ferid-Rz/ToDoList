<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Post</h2>
    <p>
        <input class="w3-input" type="text" name="title" value="<?= $post['title']; ?>">
        <label>Title</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="content" value="<?= $post['content']; ?>" >
        <label>Content</label>
    </p>
    <p>
      <label>Date</label>
      <input class="w3-input" type="text" name="date" value="<?= $post['date']; ?>" id="datepicker" >  
    </p>

    <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Post">
    </p>
            

</form>