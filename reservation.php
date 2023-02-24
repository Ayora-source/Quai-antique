<?php
require ("config2.php");
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
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div>
    <?php  include 'header.php'?>
      <div class="banner1">
        <div class="banner-text">
          <h1>Réservation</h1>
          <p>Restaurant</p>
        </div>
      </div>
    </div>  
  <section style="background: white;"><br><br> 
    <?php
        if (isset($_REQUEST['tel'], $_REQUEST['username'], $_REQUEST['firstname'], $_REQUEST['covers'], $_REQUEST['allergy'], $_REQUEST['date'], $_REQUEST['time'])){
          // Recover tel
          $tel = stripslashes($_REQUEST['tel']);
          // Recover username 
          $username = stripslashes($_REQUEST['username']);
          // Recover firstname 
          $firstname = stripslashes($_REQUEST['firstname']);
          // Recover covers 
          $covers = stripslashes($_REQUEST['covers']);
          // Recover allergy
          $allergy = stripslashes($_REQUEST['allergy']); 
          // Recover date
          $date = stripslashes($_REQUEST['date']);
          // Recover time
          $time = stripslashes($_REQUEST['time']);  

            // SQL query to select all rows of the table     
            $sql = "SELECT * FROM guest";
            $resultat = Exrequete($connect, $sql);
            //Execute the request 
            $rown = mysqli_fetch_assoc($resultat);
            // SQL query to select all rows of the table
            $check_query = "SELECT * FROM reservation WHERE date='$date' AND time='$time'";
            //Execute the request 
            $check_result = mysqli_query($connect, $check_query);
            $sql_total_reservations = "SELECT SUM(covers) FROM reservation WHERE date = '$date'";
            $res_total_reservations = mysqli_query($connect, $sql_total_reservations);
            //Execute the request 
            $row = mysqli_fetch_assoc($res_total_reservations);
            $total_reservations = $row['SUM(covers)'];

            if ($total_reservations + $covers <= $rown['guest']) {
             //insert reservation
              $sql = "INSERT INTO `reservation`(tel, username, firstname, covers, allergy, date, time) VALUES ('$tel', '$username', '$firstname','$covers','$allergy','$date','$time')";
              if (mysqli_query($connect, $sql)) {
                 echo "<p style=\"text-align: center; font-weight: bold;\">Réservation effectuée avec succès</p>";
              } 
              else {
                echo "Erreur: " . $sql . "<br>" . mysqli_error($connect);
              }
            }
        else {
         echo "<p style=\"text-align: center; font-weight: bold;\">Le restaurant peux acceuillir que ".$rown['guest']." personnes par crénaux, vous pouvez toujours nous contacter au 06000000</p>"; 
        }
       } 
    ?>
    <div class="contact-wrapper">  
      <form method="post" >
        <h1 class="section-header" style="text-align: center;">Réserver votre table!</h1>
        <div>
          <label for="tel">Téléphone :</label>
          <input type="text" id="tel" name="tel" required>
        </div>          
          <?php 
          //If a session has been opened
          if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['user'])) {
            // SQL query to select all rows of the table
            $sql = "SELECT * FROM users WHERE id = '" . $_SESSION['user'] . "'";
            //Execute the request 
            $result = Exrequete($connect, $sql);
            // Loop that displays the results of the query 
            while ($row = mysqli_fetch_assoc($result)) { ?>
              <div>       
                <label for="username">Prénom</label>
                <input type="text" id="username" name="username" value="<?php echo $row['username'] ; ?>" required>
              </div>
              <div>       
                <label for="firstname">Nom</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname'] ; ?>" required>
              </div>
              <div>       
                <label for="covers">Nombre de couverts :</label>
                <input type="number" id="covers" name="covers" value="<?php echo $row['covers'] ; ?>" required>
              </div>
              <div> 
                <label for="allergy">Allergies :</label>
                <input type="text" id="allergy" name="allergy" value="<?php echo $row['allergy'] ; ?>">

          <?php 
            } 
          }
          else { ?>

            <div>       
              <label for="username">Prénom</label>
              <input type="text" id="username" name="username" required>
            </div>
             <div>       
              <label for="firstname">Nom</label>
              <input type="text" id="firstname" name="firstname" required>
            </div>
            <div>       
              <label for="covers">Nombre de couverts :</label>
              <input type="number" id="covers" name="covers"  required>
            </div>
            <div> 
              <label for="allergy">Allergies :</label>
              <input type="text" id="allergy" name="allergy" >

          <?php }?>
       
            </div>
            <div> 
              <label for="Date">Date :</label>
              <input type="Date" id="date" name="date" > 
            </div> 
            <div>
              <label for="time">Heure :</label>
              <select id="time" name="time" required>
                <option value="12:00">12:00</option>
                <option value="12:15">12:15</option>
                <option value="12:30">12:30</option>
                <option value="12:45">12:45</option>
                <option value="12:00">13:00</option>
                <option value="13:15">13:15</option>
                <option value="13:30">13:30</option>
                <option value="13:45">13:45</option>
                <option value="14:00">14:00</option>
                <option value="14:15">14:15</option>
                <option value="14:30">14:30</option>
              </select>
            </div>         
              <input type="submit" name="submit" value="reserver" class="box-button" />
            </div>
          </form>
         </div> 
    <?php include 'footer.php'?>
  </body>
</html>
