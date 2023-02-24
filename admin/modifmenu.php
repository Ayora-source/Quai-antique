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
$starter = $_POST['starter'];
$main = $_POST['main'];
$dessert = $_POST['dessert'];
$price = $_POST['price'];

// Update the data in the database
$sql = "UPDATE menu SET  starter = '$starter', main = '$main', dessert = '$dessert', price = '$price' WHERE id = '$element_id'";

if (mysqli_query($connect, $sql)) {
    echo "L'élément a été modifié avec succès.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

?>