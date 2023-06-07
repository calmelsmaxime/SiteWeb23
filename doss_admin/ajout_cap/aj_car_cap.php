<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Cap = $_POST['ID_Cap'];
$nom = $_POST['nom'];
$type = $_POST['type'];
$nom_Bat = $_POST['nom_Bat'];


//Requête pour récupéré les données du batiments choisit
$sql = "SELECT * FROM batiment 
		WHERE nom = '$nom_Bat' 
		LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Récupération des valeurs 
$ID_Bat = $row['ID_Bat'];
$log = $row['Login_gest'];
$mdp = $row['mdp_gest'];

// Concaténation de $ID_Bat et $ID_Cap
$ID_Bat_Cap = $ID_Bat . $ID_Cap;

// Requête pour ajouter un capteur dans les batiments
$sql2 = "INSERT INTO batiment (ID_Bat, nom, login_gest, mdp_gest) 
		VALUES ('$ID_Bat_Cap', '$nom_Bat','$log','$mdp' )";
$result2 = mysqli_query($conn, $sql2);


// Requête pour ajouter un capteur dans les capteurs
$sql3 = "INSERT INTO capteur (ID_Cap, nom, Type, ID_Bat) 
		VALUES ('$ID_Cap', '$nom', '$type', '$ID_Bat_Cap')";
$result3 = mysqli_query($conn, $sql3);

// Vérification de l'exécution de la requête
if ($result2 && $result3) {
    echo "Le capteur a été ajouté avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'ajout du capteur : " . mysqli_error($conn);
}

?>