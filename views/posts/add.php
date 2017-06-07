<div class="row">
    <div class="col-md-3 col-md-offset-3">
        <label for="email">Author: </label>
        <input type="text" class="form-control" name="auth" id = "auth"><br>
        <label for="email">Content:</label>
        <input type="text" class="form-control" name="content" id ="content"><br>
        <input type="submit" class="btn btn-default" value="Submit" id = "Submit">
    
    </div>
</div>



<script>

$( "#Submit" ).click(function() {
  var auth = $('#auth').val();
  var content = $('#content').val();
  var data={auth:auth,content:content}
    $.ajax({
      type: "POST",
      url: "ajax_receiver.php/?controller=posts&action=save",
      data: data,
      success:function(response){
        response = $.parseJSON(response);
          if(response.success){
            alert("Added!!");
            window.location = "?controller=posts&action=index";
          }
      }
    });
});


</script>

