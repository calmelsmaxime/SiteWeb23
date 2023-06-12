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
	$sql = "SELECT COUNT(DISTINCT nom) AS nom FROM capteur";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_bat = $row['nom'];


// Query to retrieve the name of the buildings
$sql2 = "SELECT DISTINCT nom, ID_Cap FROM capteur
		LIMIT $total_bat";
$result2 = mysqli_query($conn, $sql2);


// Displaying the buildings 
echo "<br> <strong> L'ID des différents capteurs est :</strong>";
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_Cap'] . ', ';
    }
	
//Disconnecting from the database
mysqli_close($conn);
?>	

</body>
</html>
