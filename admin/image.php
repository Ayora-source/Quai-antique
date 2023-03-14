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
    <?php include 'head.php' ?>
  </head>
  <body style="text-align:center;">
    <div>
    <?php include 'header-admin.php' ?>
  </div>
        <section >
          <h2 >Ajouter une photo</h2><br>
           <form  action="ajoutimage.php"  method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Descriptif">
            <input type="file" name="file"><br><br>
            <button type="submit" name= "Ajouter">Ajouter</button>
          </form><br>
        </section>      
        <h2 style="text-align:center;">Modification des images</h2><br>
        <section>
         <?php
           // SQL query to select all rows of the table
          $sql = "SELECT * FROM photos";
          // Exécution de la requête et récupération des résultats
          $result = Exrequete($connect, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div>
            <img width="100" height="100" src="../img/<?php echo $row['file']; ?>" alt="photo">
              <form action="modifimage.php" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
               <input type="file" name="file">
               <button type="submit" name="modifier">Modifier</button>
               <button type="submit" name="supprimer">supprimer</button><br>
              </form>
        </div><br>
         <?php } ?>
        </section><br><br>
       </body> 
    </html>  
 