<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Cap = $_POST['ID_Cap'];
$nom = $_POST['nom'];
$type = $_POST['type'];
$ID_Bat = $_POST['ID_Bat'];

// Requête pour ajouter un capteur
$sql = "INSERT INTO capteur (ID_Cap, nom, Type, ID_Bat) 
		VALUES ('$ID_Cap', '$nom', '$type', '$ID_Bat')";
$result = mysqli_query($conn, $sql);

// Vérification de l'exécution de la requête
if ($result) {
    echo "Le capteur a été ajouté avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'ajout du capteur : " . mysqli_error($conn);
}

?>