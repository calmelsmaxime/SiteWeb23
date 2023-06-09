<?php
// Récupération de l'ID du bat 
$ID_bat = $_POST['batID'];




// Connection à la base de donnée
require '../connexion_bd.php';

// Requête pour trouver le nombre de capteurs 
	$sql = "SELECT COUNT(*) AS nom FROM capteur
			WHERE ID_bat = '$ID_bat%'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['nom'];
	
// Requête pour récupérer les capteurs 
$sql2 = "SELECT DISTINCT nom FROM capteur";
$result2 = mysqli_query($conn, $sql2);

// Affichage des capteurs 
echo '<strong> Le nom des capteurs sont : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['nom'] . ', ';
    }

?>