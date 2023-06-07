<?php 

// Connection à la base de donnée
require '../../connexion_bd.php';

// Requête pour trouver le nombre de mesures
	$sql = "SELECT COUNT(*) AS ID_Mes FROM mesure";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['ID_Mes'];
	
// Requête pour récupérer les mesures 
$sql2 = "SELECT ID_Mes FROM mesure";
$result2 = mysqli_query($conn, $sql2);

// Affichage des mesures
echo '<strong> Les ID des mesures indisponibles sont sous la forme : ID_bat ID_cap ID_mes : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_Mes'] . ', ';
    }
?>