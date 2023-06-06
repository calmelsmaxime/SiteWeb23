<?php 

// Connection à la base de donnée
require '../../connexion_bd.php';

// Requête pour trouver le nombre de batiment 
	$sql = "SELECT COUNT(*) AS ID_Bat FROM batiment";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['ID_Bat'];
	
// Requête pour récupérer les batiment 
$sql2 = "SELECT ID_Bat FROM batiment";
$result2 = mysqli_query($conn, $sql2);

// Affichage des batiment 
echo '<strong> Les ID des batiment sont : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_Bat'] . ', ';
    }
?>	