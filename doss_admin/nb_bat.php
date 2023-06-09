<?php 

// Connecting to the database
require '../../connexion_bd.php';

// Query to find the number of buildings
	$sql = "SELECT COUNT(DISTINCT nom) AS nom FROM batiment";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_bat = $row['nom'];


// Query to retrieve the names of the buildings
$sql2 = "SELECT DISTINCT nom, ID_bat FROM batiment
		LIMIT $total_bat";
$result2 = mysqli_query($conn, $sql2);

// Displaying the buildings 
echo '<br> <strong> Les ID des batiment sont :</strong>';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_bat'] . ', ';
    }
?>	