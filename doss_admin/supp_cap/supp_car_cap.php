<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$id_cap = $_POST['id_cap'];


// Requête pour trouver ID du batiment du capteur
$sql = "SELECT * FROM capteur 
		WHERE ID_cap = '$id_cap'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$ID_Bat = $row['ID_Bat'];

// Requête pour supprimer le batiment dans la table capteur
$sql2 = "DELETE FROM capteur 
		WHERE ID_Cap = '$id_cap'";
$result2 = mysqli_query($conn, $sql2);

// Requête pour supprimer le batiment dans la table batiment
$sql3 = "DELETE FROM batiment 		
		WHERE ID_bat = '$ID_Bat'";
$result3= mysqli_query($conn, $sql3);


// Vérification de l'exécution de la requête
if ($result2 && $result3) {
    echo "Le capteur a été supprimée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression du capteur : " . mysqli_error($conn);
}


?>