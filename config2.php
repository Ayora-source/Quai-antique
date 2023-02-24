<?php
session_start();
$adm = (isset($_SESSION['adm']))? intval($_SESSION['adm']) : 0; 
$user = (isset($_SESSION['user']))? intval($_SESSION['user']) : 0; 

// Identification information
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_DATABASE", "registration");


// Connection to the MySQL database 
$connect = mysqli_connect(DB_SERVER , DB_USERNAME, DB_PASSWORD, DB_DATABASE);
 
// Check the connection
if($connect === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}


function Exrequete ($connect, $requete) {     
    $res = mysqli_query($connect, $requete);      
    if ($res) { 
        return $res; 
    }       
    else {          
        $handle = fopen("error_log.txt", 'a');
        $lign = "erreur ".date("Y-m-d H:i")." ".$_SERVER['PHP_SELF']." ".$requete." ".mysqli_error($connect)."\n";
        $fw = fwrite($handle,$lign);
        fclose($handle);
        echo "Désolé, une erreur est survenue, le webmaster a été prévenu.<br><a href=\"index.php\">Retour</a>";            
        exit();     
    }   
} 

?>
