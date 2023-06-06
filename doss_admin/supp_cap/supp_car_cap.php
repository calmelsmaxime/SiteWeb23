<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Cap = $_POST['ID_Cap'];


// Requête pour supprimer le batiment
$sql = "DELETE * FROM capteur 
		WHERE ID_Cap = '$ID_Cap'";
$result = mysqli_query($conn, $sql);

// Vérification de l'exécution de la requête
if ($result) {
    echo "Le capteur a été supprimée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression du capteur : " . mysqli_error($conn);
}


?>