<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
    }
      
//select the modified button
if (isset($_POST['modifier'])) {
  // Retrieve the data from the form
  $id = $_POST['id'];
  $name = $_POST['name'];
  $file_tmp = $_FILES['file']['tmp_name'];
  if (is_uploaded_file($file_tmp)) {
    $file = $_FILES['file']['name'];
    $destination = "../img/".$file;
    move_uploaded_file($file_tmp, $destination);

    // Update the data in the database
    $query = "UPDATE photos SET file = '".mysqli_real_escape_string($connect, $file)."', name = '".mysqli_real_escape_string($connect, $name)."' WHERE id = '".mysqli_real_escape_string($connect, $id)."'";
    if (mysqli_query($connect, $query)) {
      echo "L'élément a été modifié avec succès.<br>";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
  }
  } else {
    echo "Le fichier n'est pas un fichier téléchargé.";
  }

//select the delete button
if (isset($_POST['supprimer'])) {
  // Retrieve the data from the form
  $id = $_POST['id'];
    //delete items in database
    $query = "DELETE FROM `photos` WHERE id= $id";
    if (mysqli_query($connect, $query)) {
      echo "L'élément a été modifié avec succès.<br>";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
  } else {
    echo "Le fichier a été supprimé.";
  }

mysqli_close($connect);
?>