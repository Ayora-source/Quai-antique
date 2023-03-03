<?php
require ("config2.php");
?>
<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <title>Quai Antique</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div>
     <?php include 'header.php'?>
      <div class="banner1">
        <div class="banner-text">
          <h1>Quai Antique</h1>
          <p>Restaurant</p>
        </div>
      </div>
    </div>
  <section style="background: rgba(254, 219, 178, 1) ;"><br><br> 
    <h2 style="text-align: center; color: white; font-weight: bold;">Le Restaurant "Quai Antique"</h2>
      <div class="container">
        <p style="padding: 30px;">Le Chef Arnaud Michant aime passionnément les produits - et producteurs - de la Savoie.
        C’est pourquoi il a décidé d’ouvrir son troisième restaurant dans ce département.
        Le Quai Antique sera installé à Chambéry et proposera au déjeuner comme au dîner une
        expérience gastronomique, à travers une cuisine sans artifice.
        Plus encore que ses deux autres restaurants, Arnaud Michant le voit comme une promesse
        d’un voyage dans son univers culinaire.</p>
        <div class="img1"></div>
      </div><br><br><br>
  </section><br><br>

  <section>
    <div>
      <?php
        // SQL query to select all rows of the table
        $query = "SELECT * FROM photos";
        //Execute the request 
        $result = mysqli_query($connect, $query);
      ?>
      <p style="text-align: center; color: rgba(254, 219, 178, 1); font-weight: bold;">Les plats Favorits du CHEF.</p>
      <div class="container">
        <div class="row"> 
          <?php

          // Loop that displays the results of the query
            while ($row = mysqli_fetch_assoc($result)) {?>  

          <div class="col-lg-4" >
        
            <p  style="text-align: center; padding: 40px"><?php echo $row['name'] ?></p>
            <img style="display: block; margin: auto;" width="400" height="400" style="padding: 40px;" src="admin/<?php echo $row['file'] ?>" alt="Image 1">  
          </div>        
          <?php } ?>
        </div>
      </div>
    </div>
  </section><br>

  <footer>
   <?php include 'footer.php'?>
  </footer>

 </body>
</html>

