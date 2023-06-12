<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset="utf-8">
 </head>
 <body>

<?php 

// Connecting to the database
require '../../connexion_bd.php';

// Query to find the number of sensors
	$sql = "SELECT COUNT(*) AS nom FROM capteur";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['nom'];
	
// Query to retrieve the sensors
$sql2 = "SELECT DISTINCT nom FROM capteur";
$result2 = mysqli_query($conn, $sql2);

// Displaying the sensors
echo '<strong> Le nom des capteurs est : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['nom'] . ', ';
    }
	
//Disconnecting from the database
mysqli_close($conn);

?>

</body>
</html>