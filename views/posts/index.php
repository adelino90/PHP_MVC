<p>Here is a list of all posts:</p>
<a href = '?controller=posts&action=add'> Add Books <a>
<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->author; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
  </p>
<?php } ?>