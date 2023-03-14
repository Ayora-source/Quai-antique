<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
    }
      
// Retrieve the data from the form
$element_id = $_POST['element_id'];
$opening_m = $_POST['opening_m'];
$closure_m = $_POST['closure_m'];
$opening_s = $_POST['opening_s'];
$closure_s = $_POST['closure_s'];

// Update the data in the database
$sql = "UPDATE schedule SET  opening_m = '$opening_m', closure_m = '$closure_m', opening_s = '$opening_s', closure_s = '$closure_s'  WHERE id = '$element_id'";

if (mysqli_query($connect, $sql)) {
    echo "L'élément a été modifié avec succès.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

?> 