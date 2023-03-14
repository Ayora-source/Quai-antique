<?php
  require ("../../config1.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
        }

  if (isset($_POST['name']) && isset($_FILES['file'])) {
    // retrieve the file name from the form
    $name = $_POST['name'];
    //retrieve the file elements from the form
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    //The path where the file will be saved
    $destination = "../img/".$file; 
    //insert the file in the foto folder
    move_uploaded_file($file_tmp, $destination);
    
    //insert the elements in the database 
    $query = "INSERT INTO photos (name, file) VALUES ('$name', '$file')";
    if (mysqli_query($connect, $query)) {
      echo "L'élément a été modifié avec succès.<br>";
    } 
    else {
      echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
  } 
  else {
    echo "Le fichier n'est pas un fichier téléchargé.";
  }


?>