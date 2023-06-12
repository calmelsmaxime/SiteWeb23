<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset="utf-8">
 </head>
 <body>
 
<?php 

require '../../connexion_bd.php';

$ID_Mes = $_POST['ID_Mes'];

//Query to delete the measurement
$sql3 = "DELETE FROM mesure 
		WHERE ID_Mes = '$ID_Mes'";
$result3 = mysqli_query($conn, $sql3);


// Query to delete the sensor 
$sql4 = "DELETE FROM capteur 
		WHERE ID_Cap = '$ID_Mes'";
$result4 = mysqli_query($conn, $sql4);


// Query to delete the building
$sql5 = "DELETE FROM batiment 
		WHERE ID_Bat = '$ID_Mes'";
$result5 = mysqli_query($conn, $sql5);

//Disconnecting from the database
mysqli_close($conn);

// Verifying the execution of the query
if ($result3 && $result4 && $result5) {
    echo "La donnée a été supprimée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression de la donnée : " ;
}


?>

</body>
</html>
