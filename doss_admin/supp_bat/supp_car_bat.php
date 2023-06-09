<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Bat = $_POST['ID_Bat'];

// Requête pour supprimer les mesure dans la table mesure
$sql = "DELETE FROM mesure
		WHERE ID_Cap LIKE '$ID_Bat%'";
$result = mysqli_query($conn, $sql);

// Requête pour supprimer les mesure et les capteur dans la table capteur
$sql2 = "DELETE FROM capteur
		WHERE ID_Bat LIKE '$ID_Bat%'";
$result2 = mysqli_query($conn, $sql2);

// Requête pour supprimer le batiment, les mesure et les capteur dans la table batiment
$sql3 = "DELETE FROM batiment 
		WHERE ID_Bat LIKE '$ID_Bat%'";
$result3 = mysqli_query($conn, $sql3);

// Vérification de l'exécution de la requête
if ($result && $result2 && $result3) {
    echo "Le bâtiment a été supprimé avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression du bâtiment : " . mysqli_error($conn);
}

?>