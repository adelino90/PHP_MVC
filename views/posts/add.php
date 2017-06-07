<script src="js/jquery.js"></script>
  Author: <input type="text" name="auth" id = "auth"><br>
  Content: <input type="text" name="content" id ="content"><br>
<input type="submit" value="Submit" id = "Submit">




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

