<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$id_cap = $_POST['id_cap'];


// Requête pour trouver l'ID du batiment du capteur et le nom du capteur
$sql = "SELECT * FROM capteur 
		WHERE ID_cap = '$id_cap'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$ID_Bat = $row['ID_Bat'];
$nom_cap = $row['Nom'];

// Requete pour trouver le nombre de mesure
$sql4 = "SELECT COUNT(Nom) AS total FROM capteur 
		WHERE Nom = '$nom_cap'";
$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($result4);
$nb_donn = $row4['total'] - 1;


// Trouver les ID des mesures 
$sql5 = "SELECT * FROM capteur 
		WHERE Nom LIKE '$nom_cap'
		ORDER BY ID_Cap DESC
		LIMIT $nb_donn ";
$result5 = mysqli_query($conn, $sql5);


// Requête pour supprimer ses donnée dans les 3 tables
while ($row5 = mysqli_fetch_assoc($result5)){
	$ID = $row5['ID_Cap'];
	$sql6 = "DELETE FROM mesure
			WHERE ID_Cap = '$ID'";
	$result6 = mysqli_query($conn, $sql6);
	
	$ID2 = $row5['ID_Cap'];
	$sql8 = "DELETE FROM capteur
			WHERE ID_Cap = '$ID2'";
	$result8 = mysqli_query($conn, $sql8);
	
	$ID3 = $row5['ID_Cap'];
	$sql7 = "DELETE FROM batiment
			WHERE ID_Bat = '$ID3'";
	$result7 = mysqli_query($conn, $sql7);
}

// Requête pour supprimer le capteur
$sql2 = "DELETE FROM capteur 
		WHERE ID_Cap = '$id_cap'";
$result2 = mysqli_query($conn, $sql2);


// Requête pour supprimer le batiment dans la table batiment
$sql3 = "DELETE FROM batiment 		
		WHERE ID_bat = '$ID_Bat'";
$result3= mysqli_query($conn, $sql3);


// Vérification de l'exécution de la requête
if ($result2 && $result3 && $result6 && $result7 && $result8) {
    echo "Le capteur a été supprimée avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression du capteur" . mysqli_error($conn);
}


?>