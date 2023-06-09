<?php 

// Connection à la base de donnée
require '../../connexion_bd.php';

// Requête pour trouver le nombre de batiment 
	$sql = "SELECT COUNT(DISTINCT nom) AS nom FROM batiment";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_bat = $row['nom'];


// Requête pour récupérer les nom des batiments
$sql2 = "SELECT DISTINCT nom, ID_bat FROM batiment
		LIMIT $total_bat";
$result2 = mysqli_query($conn, $sql2);

// Affichage des batiment 
echo '<br> <strong> Les ID des batiment sont :</strong>';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_bat'] . ', ';
    }
?>	