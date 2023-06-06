<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Bat = $_POST['ID_Bat'];
$nom = $_POST['nom'];
$log_gest = $_POST['log_gest'];
$mdp_gest = $_POST['mdp_gest'];

// Requête pour ajouter un batiment
$sql = "INSERT INTO batiment (ID_Bat, nom, log_gest, mdp_gest) 
		VALUES ('$ID_Bat', '$nom', '$log_gest', '$mdp_gest')";
$result = mysqli_query($conn, $sql);

// Vérification de l'exécution de la requête
if ($result) {
    echo "Le bâtiment a été ajouté avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'ajout du bâtiment : " . mysqli_error($conn);
}

?>