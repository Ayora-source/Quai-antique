<?php
require ("../config2.php");
  // Initialiser la session
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["admin"])){
    header("Location: ../login.php");
    exit(); 
  }

    // SQL query to select all rows of the table
    $sql = "SELECT * FROM card ";
    //Execute the request 
    $result = Exrequete($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    //recover: id_type, title, description, price 
    if (isset($_REQUEST['id_type'], $_REQUEST['title'], $_REQUEST['description'], $_REQUEST['price'])){
    $title = stripslashes($_REQUEST['title']);
    $description = stripslashes($_REQUEST['description']);
    $type = stripslashes($_REQUEST['id_type']);
    $price = stripslashes($_REQUEST['price']);
 
    //insert the elements in the database   
    $query = "INSERT into `card` (id_type, title, description, price)
              VALUES ( '$type', '$title', '$description', '$price')";
    $res = Exrequete($connect, $query);
      if($res){
         echo "<div class='sucess'>
               <h3>Vous êtes inscrit avec succès.</h3>";          
      }
    }
?>