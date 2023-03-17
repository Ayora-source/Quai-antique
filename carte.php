<?php
require('config2.php');
?>
<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <title>Carte Quai antique</title>
    <meta charset="utf-8">
    <?php include 'head.php'?>
  </head>
<body>
  <div>
    <?php include 'header.php'?>
    <div class="banner2">
      <div class="banner-text">
      <h1>Notre Carte / Nos Menus</h1>
      </div>
    </div>
  </div> 
<!--   section displaying the card : starters, main and desserts -->
  <section>
     <div class="container-fluid text-center">
      <div class="row">
        <div class="col-lg-6" style="background:rgba(254, 219, 178, 1); ">
         <br><br><h1 style="text-align: center" >Notre Carte</h1><br><br>
           <?php
            // SQL query to select all rows of the table
            $sql = "SELECT card.id, id_type, title, description, price FROM card";
            //Execute the request 
            $result = mysqli_query($connect, $sql);

            //Show entries
            echo "<H1 style=\"font-weight: bold;\" >Entrées</H1>";
              while ($row = mysqli_fetch_assoc($result)) {
                 if ($row['id_type'] == 1) {
                  echo "<div class='element-item'>";
                  echo "<p style=\"text-align: center; font-weight: bold; \">" . $row["title"] . "- " . $row["price"] . "</p>";
                  echo "<p style=\"text-align: center\">" . $row["description"] . "</p><br>";
                  echo "</div>";
                 }
              }

            //Display dishes
             mysqli_data_seek($result, 0); // Rewind the result set to the beginning
              echo "<H1 style=\"font-weight: bold;\" >Plats</H1>";
                while ($row = mysqli_fetch_assoc($result)) {
                 if ($row['id_type'] == 2) {
                  echo "<div class='element-item'>";
                  echo "<p style=\"text-align: center; font-weight: bold; \">" . $row["title"] . "- " . $row["price"] . "";
                  echo "<p style=\"text-align: center\">" . $row["description"] . "</p><br>";
                  echo "</div>";
                 }
                }

            // Display the desserts
             mysqli_data_seek($result, 0); // Rewind the result set to the beginning
              echo "<H1 style=\"font-weight: bold;\" >Désserts</H1>";
                while ($row = mysqli_fetch_assoc($result)) {
                  if ($row['id_type'] == 3) {
                    echo "<div class='element-item'>";
                    echo "<p style=\"text-align: center; font-weight: bold; \">" . $row["title"] . "-" . $row["price"] . "<br>";
                    echo "<p style=\"text-align: center\">" . $row["description"] . "</p><br>";
                    echo "</div>";
                  }
                }
          ?>

        </div>
       <!--   section displaying the menu : starters, main and desserts -->
        <div class="col-lg-6">
          <br><br><h1 style="text-align: center">Nos Menus </h1><br><br>
            <?php
              // SQL query to select all rows of the table
              $query = "SELECT * FROM menu";
              //Execute the request 
              $result1 = mysqli_query($connect, $query);
                // Loop that displays the results of the query
                  while ($row = mysqli_fetch_assoc($result1)) {
                    echo "<div class='element-item'>";
                    echo "<h1 style=\"text-align: center\">" . $row["type"] . "</h1>";
                    echo "<p style=\"text-align: center\">" . $row["starter"] . " + " . $row["main"] . " + " . $row["dessert"] . "</p>";
                    echo "<p style=\"text-align: center\">" . $row["price"] . "</p>";
                    echo "</div>";
                  }
            ?>
        </div>
      </div>
    </div>
   </section><br>
   <a class="btn btn-dark"  href="reservation.php" style="display: block; margin-right:40%; margin-left: 40%" role="button">Réserver une table</a><br><br>
  <footer>
       <?php include 'footer.php'?>
  </footer>     
 </body>
</html>
