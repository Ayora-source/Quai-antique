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

    <h1>Espace d'administration</h1><br>
        <h2>Modification des images</h2>
        <section>
         <?php
           // SQL query to select all rows of the table
          $sql = "SELECT * FROM photos";
          // Exécution de la requête et récupération des résultats
          $result = Exrequete($connect, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div>
            <img width="100" height="100" src="<?php echo $row['file']; ?>" alt="photo">
              <form action="modifimage.php" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <input type="text" name="name" value="<?php echo $row['name']; ?>">
               <input type="file" name="file">
               <button type="submit" name="modifier">Modifier</button>
               <button type="submit" name="supprimer">supprimer</button>
              </form>
        </div>
         <?php } ?>
        </section><br><br>

        <section style="margin-left: 200px;">
          <h2>Ajouter une photo</h2>
           <form  action="ajoutimage.php"  method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Descriptif">
            <input type="file" name="file"><br><br>
            <button type="submit" name= "Ajouter">Ajouter</button>
          </form><br>
        </section>
       </body> 
    </html>  
 