<?php 

//Connecting to the database
require '../../connexion_bd.php';

// Query to find the number of buildings
	$sql = "SELECT COUNT(*) AS nom FROM batiment";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['nom'];
	
// Query to retrieve the buildings
$sql2 = "SELECT DISTINCT nom FROM batiment";
$result2 = mysqli_query($conn, $sql2);

// Displaying the buildings
echo ' <br> <strong> Les nom des batiment sont : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['nom'] . ', ';
    }
?>	