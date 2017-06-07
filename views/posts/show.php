
<div class="row">
    <div class="col-md-3 col-md-offset-3">
        <label for="email">Author: </label>
        <input type="text" class="form-control" name="auth" id = "auth" value="<?php echo $post->author; ?>"><br>
        <label for="email">Content:</label>
        <input type="text" class="form-control" name="content" id ="content"  value="<?php echo $post->content; ?>"><br>
        <input type="submit" class="btn btn-default" value="Update" id = "Submit">
        <input type="submit" class="btn btn-default" value="Delete" id = "Del">
    </div>
</div>

<script>

$( document ).ready(function() {
   var thisid = <?php echo $post->id; ?>

    $( "#Submit" ).click(function() {
    var auth = $('#auth').val();
    var content = $('#content').val();
    var data={auth:auth,content:content,id:thisid}
         $.ajax({
            type: "POST",
            url: "ajax_receiver.php/?controller=posts&action=update",
            data: data,
            success:function(response){
                    response = $.parseJSON(response);
                    if(response.success){
                        alert("Updated!!");
                        window.location = "?controller=posts&action=index";
                    }
                }
            });
    });
    $( "#Del" ).click(function() {
        var data={id:thisid}
            $.ajax({
                type: "POST",
                url: "ajax_receiver.php/?controller=posts&action=delete",
                data: data,
                success:function(response){
                        response = $.parseJSON(response);
                        if(response.success){
                            alert("Deleted!!");
                            window.location = "?controller=posts&action=index";
                        }
                    }
                });
        });
 
        
});


</script>