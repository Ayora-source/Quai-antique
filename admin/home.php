<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
        }
?>  
?>
  <header>
        <?php 
include 'header-admin.php'
?>
  </header>
  <body>
    <div class="sucess">
    <h1>Bienvenue!</h1>
    <p>C'est votre espace admin.</p>
    </div>
  </body>
</html>