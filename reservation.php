<?php
require ("config2.php");
?>
<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <title>Quai Antique</title>
    <?php include 'head.php'?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
         echo "<p style=\"text-align: center; font-weight: bold;\">Le restaurant peut accueillir que ".$rown['guest']." personnes par créneau, vous pouvez toujours nous contacter au 06000000</p>"; 
        }
       } 
    ?>
    <div class="contact-wrapper">  
      <form class="form-horizontal" method="post" id="reservation-form">
        <h1 class="section-header" style="text-align: center;">Réservez votre table!</h1>

          
          <?php 
          //If a session has been opened
          if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['user'])) {
            // SQL query to select all rows of the table
            $sql = "SELECT * FROM users WHERE id = '" . $_SESSION['user'] . "'";
            //Execute the request
            $result = Exrequete($connect, $sql);
            // Loop that displays the results of the query 
            while ($row = mysqli_fetch_assoc($result)) { ?>    
                <label for="covers">Nombre de couverts :</label>
                <input type="number" id="covers" name="covers" value="<?php echo $row['covers'] ; ?>" required>
              <label for="Date">Date :</label>
              <input type="Date" id="date" name="date" required> 
              <label for="time">Heure :</label>
              <select id="time" name="time" required>
                <option value="12:00">12:00</option>
                <option value="12:15">12:15</option>
                <option value="12:30">12:30</option>
                <option value="12:45">12:45</option>
                <option value="13:00">13:00</option>
                <option value="13:15">13:15</option>
                <option value="13:30">13:30</option>
                <option value="13:45">13:45</option>
                <option value="14:00">14:00</option>
                <option value="14:15">14:15</option>
                <option value="14:30">14:30</option>
                <option value="19:00">19:00</option>
                <option value="19:15">19:15</option>
                <option value="19:30">19:30</option>
                <option value="19:45">19:45</option>
                <option value="20:00">20:00</option>
                <option value="20:15">20:15</option>
                <option value="20:30">20:30</option>
                <option value="20:45">20:45</option>
                <option value="21:00">21:00</option>
                <option value="21:15">21:15</option>
                <option value="21:30">21:30</option>
                <option value="21:45">21:45</option>
                <option value="22:00">22:00</option>
              </select>
            <p id="availability"></p>    
                <label for="username">Prénom :</label>
                <input type="text" id="username" name="username" value="<?php echo $row['username'] ; ?>" required>     
                <label for="firstname">Nom :</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname'] ; ?>" required>
                <label for="allergy">Allergies :</label>
                <input type="text" id="allergy" name="allergy" value="<?php echo $row['allergy'] ; ?>"> 
          <?php 
            } 
          }
          else { ?>   
              <label for="covers">Nombre de couverts :</label>
              <input type="number" id="covers" name="covers"  required>
              <label for="Date">Date :</label>
              <input type="Date" id="date" name="date" required> 
              <label for="time">Heure :</label>
              <select id="time" name="time" required>
                <option value="12:00">12:00</option>
                <option value="12:15">12:15</option>
                <option value="12:30">12:30</option>
                <option value="12:45">12:45</option>
                <option value="13:00">13:00</option>
                <option value="13:15">13:15</option>
                <option value="13:30">13:30</option>
                <option value="13:45">13:45</option>
                <option value="14:00">14:00</option>
                <option value="14:15">14:15</option>
                <option value="14:30">14:30</option>
                <option value="19:00">19:00</option>
                <option value="19:15">19:15</option>
                <option value="19:30">19:30</option>
                <option value="19:45">19:45</option>
                <option value="20:00">20:00</option>
                <option value="20:15">20:15</option>
                <option value="20:30">20:30</option>
                <option value="20:45">20:45</option>
                <option value="21:00">21:00</option>
                <option value="21:15">21:15</option>
                <option value="21:30">21:30</option>
                <option value="21:45">21:45</option>
                <option value="22:00">22:00</option>
              </select>
            <p id="availability"></p>      
              <label for="username">Prénom</label>
              <input type="text" id="username" name="username" required>      
              <label for="firstname">Nom</label>
              <input type="text" id="firstname" name="firstname" required>
              <label for="allergy">Allergies :</label>
              <input type="text" id="allergy" name="allergy">
          <?php }?>
              <label for="tel">Téléphone :</label>
              <input type="text" class="box-input" id="tel" name="tel" required>
              <input type="submit" style="background: black; color: white;" id="submit" name="submit" value="Réservez" class="box-button"/>   
          </form>
         </div>
       </form>
     </div>
   </section>
<script>
$(document).ready(function() {
  // Événement "change" pour les champs Covers, Date et Time
  $('#date, #time, #covers').on('change', function() {
    // Vérification si les champs ont tous été remplis
    if ($('#date').val() && $('#time').val() && $('#covers').val()) {
      // Récupération des valeurs des champs
      var date = $('#date').val();
      var time = $('#time').val();
      var covers = $('#covers').val();

      // Envoi de la requête AJAX au serveur
      $.ajax({
        url: 'get_reservation.php', // chemin vers le script PHP qui traite la requête
        method: 'POST',
        data: { date: date, time: time, covers: covers }, // données à envoyer au serveur
        success: function(response) {
          // Affichage de la réponse du serveur dans l'élément avec l'ID "availability"
          $('#availability').html(response);
        }
      });
    }
  });
});
</script>
    <?php include 'footer.php'?>
  </body>
</html>
