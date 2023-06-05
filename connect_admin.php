<?php
//Connection à la base de donnée
require 'connexion_bd.php';


// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Requête pour récupérer l'utilisateur correspondant aux informations d'identification fournies
$sql = "SELECT * FROM administration 
		WHERE login = '$username' AND mdp = '$password'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) == 1) {
	header('Location: admin.php');
    exit();
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect !"; // Informations d'identification incorrectes
}


?>