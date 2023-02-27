<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
        }
?> 
<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <title>Quai Antique</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div>
    <?php include 'header-admin.php' ?>
    </div>
    <div class="sucess">
    <h1>Bienvenue!</h1>
    <p>C'est votre espace admin.</p>
    </div>
  </body>
</html>