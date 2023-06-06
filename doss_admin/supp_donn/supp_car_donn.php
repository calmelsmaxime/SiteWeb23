<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Mes = $_POST['ID_Mes'];


// Requête pour supprimer le batiment
$sql = "DELETE * FROM mesure 
		WHERE ID_Mes = '$ID_Mes'";
$result = mysqli_query($conn, $sql);

// Vérification de l'exécution de la requête
if ($result) {
    echo "La donnée a été supprimée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression de la donnée : " . mysqli_error($conn);
}


?>


