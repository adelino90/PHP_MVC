<p>This is the requested post:</p>

Author:  <input type="text" name="auth" id = "auth" value="<?php echo $post->author; ?>"><br>
Content: <input type="text" name="content" id ="content"  value="<?php echo $post->content; ?>"><br>
<input type="submit" value="Update" id = "Submit">
<input type="submit" value="Delete" id = "Del">


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