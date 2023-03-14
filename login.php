<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <title>Quai Antique</title>
    <?php include 'head.php'?>
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
    </div><br><br><br>
    <?php
    require('config2.php');
    if (isset($_POST['email'])){
    //Recover emails
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connect, $email);
    //Recover pasword
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($connect, $password);
    
    $query = "SELECT id, email, type FROM `users` WHERE email='$email' and password='".hash('sha256', $password)."'";
    //Execute the request 
    $result = mysqli_query($connect,$query) or die(mysql_error());
  
      if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['admin'] = $user['id'];
        $_SESSION['user'] = $user['id'];

          // check if the user is an administrator or a user
          if ($user['type'] == 'admin') {
           header('location: admin/menu.php');     
          }
          else{
           header('location: reservation.php');
           exit();
          }
      }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
      }
    } ?>

    <div class="contact-wrapper">
      <form class="box" class="form-horizontal" method="post" name="login">
        <h1 class="box-title">Connexion</h1>
        <input type="text" class="box-input" name="email" placeholder="email">
        <input type="password" class="box-input" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion " name="submit" class="box-button">
        <p class="box-register">Vous êtes nouveau ici? 
        <a href="register.php">S'inscrire</a>
        </p>
        <?php if (! empty($message)) { ?>
          <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
      </form>
    </div>
    <?php include 'footer.php'?>
  </body>
</html>


