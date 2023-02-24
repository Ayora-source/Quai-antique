<?php
  require ("../config2.php");
  // Initialize the session
  // Check if the user is logged in, otherwise redirect them to the login page.
    if(!isset($_SESSION["admin"])){
     eader("Location: ../login.php");
      exit(); 
        }
?>  
  <header>
        <?php 
include 'header-admin.php'
?>
<body>
  <h1>Espace d'administration</h1><br>
  <h2>Modification horraire d'ouverture</h2>
  <form  action="modifhoraire.php" method="post">
        <select id="element_id" name="element_id">
        <option value="1">Lundi</option>
        <option value="2">Mardi</option>
        <option value="3">Mercredi</option>
        <option value="4">Jeudi </option>
        <option value="5">Vendredi</option>
        <option value="6">Samedi</option>
        <option value="7">Dimanche</option>

        </select><br>

        <p>Ouverture</p>
        <select id="opening_m" name="opening_m">
        <option>11:00</option>
        <option>11:15</option>
        <option>11:30</option>
        <option>11:45</option>
        <option>12:00</option>
        <option>12:15</option>
        <option>12:30</option>
        <option>12:45</option>
        <option>13:00</option>
        <option>13:15</option>
        <option>13:30</option>
        <option>13:45</option>
        <option>14:00</option>
        <option>fermé</option>
        </select><br><br>

         <p>fermeture</p>
        <select id="closure_m" name="closure_m">
        <option>11:00</option>
        <option>11:15</option>
        <option>11:30</option>
        <option>11:45</option>
        <option>12:00</option>
        <option>12:15</option>
        <option>12:30</option>
        <option>12:45</option>
        <option>13:00</option>
        <option>13:15</option>
        <option>13:30</option>
        <option>13:45</option>
        <option>14:00</option>
        <option>fermé</option>
        </select><br><br>
        
        <p>Ouverture</p>
        <select id="opening_s" name="opening_s">
        <option>19:00</option>
        <option>19:15</option>
        <option>19:30</option>
        <option>19:45</option>
        <option>20:00</option>
        <option>20:15</option>
        <option>20:30</option>
        <option>20:45</option>
        <option>21:00</option>
        <option>21:15</option>
        <option>21:30</option>
        <option>21:45</option>
        <option>22:00</option>
        <option>22:15</option>
        <option>22:30</option>
        <option>22:45</option>
        <option>23:00</option>
        </select><br><br>

        <p>Fermeture</p>
        <select id="closure_s" name="closure_s">
        <option>19:00</option>
        <option>19:15</option>
        <option>19:30</option>
        <option>19:45</option>
        <option>20:00</option>
        <option>20:15</option>
        <option>20:30</option>
        <option>20:45</option>
        <option>21:00</option>
        <option>21:15</option>
        <option>21:30</option>
        <option>21:45</option>
        <option>22:00</option>
        <option>22:15</option>
        <option>22:30</option>
        <option>22:45</option>
        <option>23:00</option>
        </select><br><br>
    <button type="submit">Modifier</button>
  </form><br><br>
