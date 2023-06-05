<?php
//Connection à la base de donnée
require '../connexion_bd.php';


// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Requête pour récupérer l'utilisateur correspondant aux informations d'identification fournies
$sql = "SELECT * FROM batiment 
		WHERE Login_gest = '$username' AND mdp_gest = '$password'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) == 1) {
	header('Location: fonction.php');
	exit();
	// Redirection vers gest_sql.php avec les données du formulaire
	header('Location: gest_sql.php?username=' . urlencode($username) . '&password=' . urlencode($password));
    exit();
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect !"; // Informations d'identification incorrectes
}


?>