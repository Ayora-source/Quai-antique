<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
    }
      // Retrieve the data from the form
      $guest = $_POST['guest'];
      // Update the data in the database
      $sql = "UPDATE guest SET  guest = '$guest' ";

      if (mysqli_query($connect, $sql)) {
          echo "L'élément a été modifié avec succès.";
      } 
      else {
         echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }
          ?>