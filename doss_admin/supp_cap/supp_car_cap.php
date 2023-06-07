<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$nom_cap = $_POST['nom_cap'];
$id_cap = $_POST['id_cap'];

// Requête pour supprimer le batiment
$sql = "DELETE FROM capteur 
		WHERE nom = '$nom_cap', ID_Cap = '$ID_cap'";
$result = mysqli_query($conn, $sql);

// Vérification de l'exécution de la requête
if ($result) {
    echo "Le capteur a été supprimée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression du capteur : " . mysqli_error($conn);
}


?>