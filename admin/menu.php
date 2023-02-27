<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
        } 
  // SQL query to select all rows of the table
    $sql = "SELECT card.id, id_type, title, description, price FROM card
            INNER join type ON type.id=id_type
            ORDER BY id_type ";
    //Execute the request 
    $result = Exrequete($connect, $sql);

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

  <!-- section displaying the card : starters, main and desserts -->
  <section style="margin-left: 200px;">
    <h2>Modification de la carte</h2>
      <form action="modifcarte.php" method="post">
        <?php 
          $i = 0;
          echo "<H1 style=\"font-weight: bold;\" >Entrée</H1>";
          // Loop that displays the results of the query
           while ($row = mysqli_fetch_assoc($result)){ 
            if ($row['id_type'] == 1) {?>
            <input type="checkbox" name="delete[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>">
            <input type="text" name="title[<?php echo $i; ?>]" value="<?php echo $row['title'] ; ?>">
            <input type="text" name="description[<?php echo $i; ?>]" value="<?php echo $row['description'] ; ?>">
            <input type="text" name="price[<?php echo $i; ?>]" value="<?php echo $row['price']; ?>">
            <input type="hidden" name="id[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>">
            <br><br>
            <?php $i++; } }
             mysqli_data_seek($result, 0); // Rewind the result set to the beginning
              echo "<H1 style=\"font-weight: bold;\" >Plats</H1>";
             while ($row = mysqli_fetch_assoc($result)){ 
              if ($row['id_type'] == 2) {?>
            <input type="checkbox" name="delete[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>">
            <input type="text" name="title[<?php echo $i; ?>]" value="<?php echo $row['title'] ; ?>">
            <input type="text" name="description[<?php echo $i; ?>]" value="<?php echo $row['description'] ; ?>">
            <input type="text" name="price[<?php echo $i; ?>]" value="<?php echo $row['price']; ?>">
            <input type="hidden" name="id[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>">
            <br><br>
            <?php $i++; }}
            mysqli_data_seek($result, 0); // Rewind the result set to the beginning
              echo "<H1 style=\"font-weight: bold;\" >Déssert</H1>";
            while ($row = mysqli_fetch_assoc($result)){ 
              if ($row['id_type'] == 3) {?>
            <input type="checkbox" name="delete[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>">
            <input type="text" name="title[<?php echo $i; ?>]" value="<?php echo $row['title'] ; ?>">
            <input type="text" name="description[<?php echo $i; ?>]" value="<?php echo $row['description'] ; ?>">
            <input type="text" name="price[<?php echo $i; ?>]" value="<?php echo $row['price']; ?>">
            <input type="hidden" name="id[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>">
            <br><br>
            <?php $i++;}}
          
        ?>
          <button type="submit" name="modifier">Modifier</button>
          <button type="submit" name="supprimer">Supprimer</button>
          </form><br><br>
  </section>
 
 <!-- add an item to the card -->
  <section style="margin-left: 200px;">
    <h2>Ajouter une Entrée, un plats ou un dessert</h2>
       <form  action="ajoutercarte.php"  method="post">
           <select id="id_type" name="id_type">
             <option value="1">Entrée</option>
             <option value="2">Plats</option>
             <option value="3">Déssert</option>
           </select><br><br>
           <input type="text" name="title" placeholder="title">        
           <input type="text" name="description" placeholder="description">
           <input type="text" name="price" placeholder="price"><br><br>
           <button type="submit" name= "Ajouter">Ajouter</button>
       </form><br>
  </section>

<!-- section displaying the menu : starters, main and desserts -->
<section style="margin-left: 200px;">
  <h2>Modification du menu</h2>
  <form action="modifmenu.php" method="post">
        <select id="element_id" name="element_id">
        <option value="1">Formule Déjeuner</option>
        <option value="2">Formule Diner</option>
        </select><br><br>
    <input type="text" name="element_entree" placeholder="Entrée">
    <input type="text" name="element_plat" placeholder="plat">
    <input type="text" name="element_dessert" placeholder="dessert">
    <input type="text" name="element_prix" placeholder="prix">
    <button type="submit"> Modifier</button>
  </form>
</section>  
</body>
</html>