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
    <?php include 'head.php' ?>
  </head>
  <body >
    <div>
    <?php include 'header-admin.php' ?>
  </div>

 
 <!-- add an item to the card -->
  <section>
    <h2 style="text-align:center;">Ajouter une Entrée, un plats ou un dessert</h2>
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
<section>
  <h2 style="text-align:center;">Modification du menu</h2>
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
  </form><br><br>
</section> 

  <!-- section displaying the card : starters, main and desserts -->
  <section>
    <h2 style="text-align:center;">Modification de la carte</h2>
        <?php 
          $i = 0;
          echo "<H3 style=\"font-weight: bold;\" >Entrée</H3>"; ?>
          <form action="modifcarte.php" method="post">
           <table class="table caption-top">
            <thead>
              <tr>
                <th scope="col">checkbox</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">prix</th>
             </tr>
          </thead>
           <tbody>
          
            <?php 
              // Loop that displays the results of the query
               while ($row = mysqli_fetch_assoc($result)){ 
                if ($row['id_type'] == 1) {?>
                  <tr>
                    <td><input type="checkbox" name="delete[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>"></td>
                    <td><input type="text" style="width:100%" name="title[<?php echo $i; ?>]" value="<?php echo $row['title'] ; ?>"></td>
                    <td><input type="text" style="width:100%" name="description[<?php echo $i; ?>]" value="<?php echo $row['description'] ; ?>"></td>
                    <td><input type="text" style="width:100%" name="price[<?php echo $i; ?>]" value="<?php echo $row['price']; ?>"></td>
                    <td><input type="hidden" name="id[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>"></td>
                  </tr>
                  </div>
                <?php $i++; } }?>                                
          </tbody>
        </table>
        <table class="table caption-top">
            <thead>
              <tr>
                <th scope="col">checkbox</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">prix</th>
             </tr>
            </thead>
            <tbody>
              <?php   
                mysqli_data_seek($result, 0); // Rewind the result set to the beginning
                echo "<H3 style=\"font-weight: bold;\" >Plats</H3>";
                 while ($row = mysqli_fetch_assoc($result)){ 
                  if ($row['id_type'] == 2) {?>
                    <tr>
                      <td><input type="checkbox" name="delete[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>"></td>
                      <td><input type="text" style="width:100%" name="title[<?php echo $i; ?>]" value="<?php echo $row['title'] ; ?>"></td>
                      <td><input type="text" style="width:100%" name="description[<?php echo $i; ?>]" value="<?php echo $row['description'] ; ?>"></td>
                      <td><input type="text" style="width:100%" name="price[<?php echo $i; ?>]" value="<?php echo $row['price']; ?>"></td>
                      <td><input type="hidden" name="id[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>"></td>
                    </tr>
                <?php $i++; } }?> 
            </tbody>                               
        </table>
        <table class="table caption-top">
            <thead>
              <tr>
                <th scope="col">checkbox</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">prix</th>
             </tr>
          </thead>
          <tbody>         
         <?php  
            mysqli_data_seek($result, 0); // Rewind the result set to the beginning
              echo "<H3 style=\"font-weight: bold;\" >Déssert</H3>";
            while ($row = mysqli_fetch_assoc($result)){ 
              if ($row['id_type'] == 3) {?>
                <tr>   
                  <td><input type="checkbox" style="width:100%" name="delete[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>"></td>
                  <td><input type="text" style="width:100%" name="title[<?php echo $i; ?>]" value="<?php echo $row['title'] ; ?>"></td>
                  <td><input type="text" style="width:100%" name="description[<?php echo $i; ?>]" value="<?php echo $row['description'] ; ?>"></td>
                  <td><input type="text" style="width:100%" name="price[<?php echo $i; ?>]" value="<?php echo $row['price']; ?>"></td>
                  <td><input type="hidden" name="id[<?php echo $i; ?>]" value="<?php echo $row['id']; ?>"></td>
                </tr>
            <?php $i++; } }?> 
          </tbody>                               
        </table>

          <button type="submit" name="modifier">Modifier</button>
          <button type="submit" name="supprimer">Supprimer</button>
          </form><br><br>
  </section>
 
</body>
</html>