




  <div class="row">
      <div class="col-md-5">
      <p>Here is a list of all posts:</p>
         <a href = '?controller=posts&action=add' class="btn btn-info" role="button"> Add Books </a>
      </div>
    </div>
      <div class="row">
         <div class="col-md-5" style="margin-top:10px;">
           <ul class="list-group">
              <?php foreach($posts as $post) { ?>
                
                   <li class="list-group-item">
                      <?php echo $post->author; ?>
                      <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
                    </li>
                
              <?php } ?>
            </ul>
          </div>
      </div>
