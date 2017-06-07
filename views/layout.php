<DOCTYPE html>
<html>
  <head>
   <script src="js/jquery.js"></script>
  </head>
  <body>
    <header>
      <a href='?controller=pages&action=home'>Home</a>
      <a href='?controller=posts&action=index'>Posts</a>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
</html>