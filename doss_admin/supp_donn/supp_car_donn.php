<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Mes = $_POST['ID_Mes'];

//Requête Sql pour trouver l'ID de la mesure 
$sql = "SELECT * FORM mesure
		WHERE ID_Mes = '$ID_Mes'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$ID_Cap = $row['ID_Cap'];

//Requête Sql pour trouver l'ID du batiment 
$sql2 = "SELECT * FORM capteur
		WHERE ID_Cap = '$ID_Cap'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$ID_bat = $row['ID_bat'];

// Requête pour supprimer la mesure 
$sql3 = "DELETE FROM mesure 
		WHERE ID_Mes = '$ID_Mes'";
$result3 = mysqli_query($conn, $sql3);


// Requête pour supprimer le capteur 
$sql4 = "DELETE FROM capteur 
		WHERE ID_Cap = '$ID_Cap'";
$result4 = mysqli_query($conn, $sql4);


// Requête pour supprimer le batiment
$sql5 = "DELETE FROM mesure 
		WHERE ID_bat = '$ID_bat'";
$result5 = mysqli_query($conn, $sql5);

// Vérification de l'exécution de la requête
if ($result3 && $result4 && $result5) {
    echo "La donnée a été supprimée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression de la donnée : " . mysqli_error($conn);
}


?>


