<?php

require ("config2.php");
$covers = $_POST['covers'];
$date = $_POST['date'];
$time = $_POST['time'];

// Vérifier la disponibilité de la table pour la date et l'heure spécifiées
$check_query = "SELECT * FROM reservation WHERE date='$date' AND time='$time'";
$check_result = mysqli_query($connect, $check_query);

// Calculer le nombre total de couverts réservés pour la date et l'heure spécifiées
$sql_total_reservations = "SELECT SUM(covers) FROM reservation WHERE date = '$date' AND time='$time'";
$res_total_reservations = mysqli_query($connect, $sql_total_reservations);
$row = mysqli_fetch_assoc($res_total_reservations);
$total_reservations = $row['SUM(covers)'];

// Vérifier si la table est disponible en fonction du nombre total de couverts réservés et du nombre de couverts maximum autorisés pour le restaurant
$sql_guest = "SELECT * FROM guest";
$resultat_guest = mysqli_query($connect, $sql_guest);
$row_guest = mysqli_fetch_assoc($resultat_guest);
if ($total_reservations + $covers <= $row_guest['guest']) {
    $disponible = true;
} else {
    $disponible = false;
}

// Afficher le résultat
if ($disponible) {
    echo "Table disponible pour la date $date et l'heure $time";
} else {
    echo "Table indisponible pour la date $date et l'heure $time";
}
?>