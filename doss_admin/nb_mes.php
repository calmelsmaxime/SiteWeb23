<?php 

// Connecting to the database
require '../../connexion_bd.php';

// Query to find the number of measurements
	$sql = "SELECT COUNT(*) AS ID_Mes FROM mesure";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['ID_Mes'];
	
// Query to retrieve the measurements 
$sql2 = "SELECT ID_Mes FROM mesure";
$result2 = mysqli_query($conn, $sql2);

// Displaying the measurements
echo '<strong> Les ID des mesures indisponibles sont sous la forme : ID_bat ID_cap ID_mes : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['ID_Mes'] . ', ';
    }
?>