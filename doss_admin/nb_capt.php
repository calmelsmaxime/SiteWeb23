<?php 

// Connection à la base de donnée
require '../../connexion_bd.php';

// Requête pour trouver le nombre de capteurs 
	$sql = "SELECT COUNT(*) AS ID_Cap FROM capteur";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['ID_Cap'];
	
// Requête pour récupérer les capteurs 
$sql2 = "SELECT ID_Cap FROM capteur";
$result2 = mysqli_query($conn, $sql2);

// Affichage des capteurs 
echo '<strong> Les ID des capteurs sont : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_Cap'] . ', ';
    }
?>

