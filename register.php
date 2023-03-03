<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <title>Quai Antique</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

      <?php
        require('config2.php');
         if (isset($_REQUEST['username'], $_REQUEST['firstname'], $_REQUEST['email'], $_REQUEST['covers'], $_REQUEST['allergy'], $_REQUEST['password'])){
          // Recover username
          $username = stripslashes($_REQUEST['username']);
          $username = mysqli_real_escape_string($connect, $username);
          //Recover firstname 
          $firstname = stripslashes($_REQUEST['firstname']);
          $firstname = mysqli_real_escape_string($connect, $firstname);
          //Recover email
          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($connect, $email);
          //Recover covers
          $covers = stripslashes($_REQUEST['covers']);
          $covers = mysqli_real_escape_string($connect, $covers);
          //Recover allergy
          $allergy = stripslashes($_REQUEST['allergy']);
          $allergy = mysqli_real_escape_string($connect, $allergy);
          //Recover password
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($connect, $password);
          
          $query = "INSERT into `users` (username, firstname, email, covers, allergy, type, password)
                    VALUES ('$username', '$firstname', '$email', '$covers', '$allergy', 'user', '".hash('sha256', $password)."')";
          //Execute the request 
          $res = mysqli_query($connect, $query);
            if($res){
               echo "<div class='sucess'>
                     <h3>Vous êtes inscrit avec succès.</h3>
                     <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
               </div>";
            }
         }
        else{}
      ?>
    <div class="contact-wrapper">
      <form class="form-horizontal" method="post">
        <!-- account creation form -->
        <h1 class="section-header" style="text-align: center;">Créez votre compte</h1>

          <input type="text" class="box-input" name="username" placeholder="Prenom" required />

          <input type="text" class="box-input" name="firstname"placeholder="Nom" required />
          
          <input type="text" class="box-input" name="email" placeholder="Email" required />

          <input type="number" class="box-input" name="covers" placeholder="Nbr couverts" required />
          
          <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

          <input type="text" class="box-input" name="allergy" placeholder="renseignez vos allergies" />
          
          <input type="submit" name="submit" value="S'inscrire" class="box-button" />
          
          <p class="box-register">Déjà inscrit? 
          <a href="login.php">Connectez-vous ici</a></p>
      </form>
    </div>
      <?php include 'footer.php'?>
  </body>
</html>
