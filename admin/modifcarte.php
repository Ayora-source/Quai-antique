<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     header("Location: ../login.php");
      exit(); 
    }

   //select the modified button
   if (isset($_POST['modifier'])) {  
    // Retrieve the data from the form
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    
    for ($i = 0; $i < count($id); $i++) {

    // Update the data in the database
    $sql = "UPDATE card SET  title = '" . $title[$i] . "', description = '" . $description[$i] . "', price = '" . $price[$i] . "' WHERE id = '" . $id[$i] . "'";

    if (mysqli_query($connect, $sql)) {
      echo "L'élément " . ($i + 0) . " a été modifié avec succès.<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
  }
  mysqli_close($connect);
}
    //select the delete button
    if (isset($_POST['supprimer'])) {
      // Check if rows have been selected for deletion
      if (isset($_POST['delete'])) {
          // Retrieve the ID of the selected lines
           $delete_ids = $_POST['delete'];

      // Loop through the IDs and perform the deletion for each of them
       foreach ($delete_ids as $id) {
          $sql = "DELETE FROM card WHERE id = '$id'";

      if (mysqli_query($connect, $sql)) {
        echo "L'élément a été supprimé avec succès.";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }
    }

    mysqli_close($connect);
  }
}
?>