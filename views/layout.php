<DOCTYPE html>
<html>
  <head>
  <title>E-Bulettin Website</title>
  <link rel="stylesheet" type="text/css"href="css/bootstrap.css">
  <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.js"></script>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href='?controller=pages&action=home'>Home</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href='?controller=pages&action=home'>Home</a></li>
              <li><a href='?controller=posts&action=index'>Posts</a></li>
    
            </ul>
          </div>
        </nav>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
</html>