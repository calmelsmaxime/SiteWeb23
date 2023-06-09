<?php 

// Connection à la base de donnée
require '../../connexion_bd.php';

// Requête pour trouver le nombre de batiment 
	$sql = "SELECT COUNT(*) AS nom FROM batiment";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['nom'];
	
// Requête pour récupérer les batiment 
$sql2 = "SELECT DISTINCT nom FROM batiment";
$result2 = mysqli_query($conn, $sql2);

// Affichage des batiment 
echo ' <br> <strong> Les nom des batiment sont : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['nom'] . ', ';
    }
?>	