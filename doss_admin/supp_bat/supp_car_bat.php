<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Bat = $_POST['ID_Bat'];


// Requête pour supprimer le batiment
$sql = "DELETE FROM batiment 
		WHERE ID_Bat = '$ID_Bat'";
$result = mysqli_query($conn, $sql);

// Vérification de l'exécution de la requête
if ($result) {
    echo "Le bâtiment a été supprimé avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression du bâtiment : " . mysqli_error($conn);
}

?>