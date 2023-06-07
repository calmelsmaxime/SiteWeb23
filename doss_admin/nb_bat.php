<?php 

// Connection à la base de donnée
require '../../connexion_bd.php';

// Requête pour trouver le nombre de batiment 
	$sql = "SELECT COUNT(*) AS ID_bat FROM batiment";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_bat = $row['ID_bat'];
	
// Requête pour récupérer les batiment 
$sql2 = "SELECT DISTINCT ID_bat FROM batiment";
$result2 = mysqli_query($conn, $sql2);

// Affichage des batiment 
echo '<br> Les ID des batiment sont sous forme :<strong> ID_bat ou ID_bat ID_Cap : </strong> <br>';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_bat'] . ', ';
    }
?>	