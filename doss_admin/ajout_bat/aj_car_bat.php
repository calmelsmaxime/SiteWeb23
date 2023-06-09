<?php 

//Connection to the database
require '../../connexion_bd.php';


// Retrieve form data
$ID_Bat = $_POST['ID_Bat'];
$nom = $_POST['nom'];
$log_gest = $_POST['log_gest'];
$mdp_gest = $_POST['mdp_gest'];

// Request to add a building
$sql = "INSERT INTO batiment (ID_Bat, nom, login_gest, mdp_gest) 
		VALUES ('$ID_Bat', '$nom', '$log_gest', '$mdp_gest')";
$result = mysqli_query($conn, $sql);

// Check execution of the query
if ($result) {
    echo "Le bâtiment a été ajouté avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'ajout du bâtiment : " . mysqli_error($conn);
}

?>