<?php 

//Connection à la base de donnée
require '../../connexion_bd.php';


// Récupération des données du formulaire
$ID_Mes = $_POST['ID_Mes'];
$Date = $_POST['Date'];
$horaire = $_POST['horaire'];
$val = $_POST['val'];
$ID_cap = $_POST['ID_cap'];



// Requête pour ajouter une donnée si l'ID cap est différent
$sql = "INSERT INTO mesure (ID_Mes, Date, horaire, Valeur, ID_cap) 
        VALUES ('$ID_Mes', '$Date', '$horaire', '$val', '$ID_cap')";
$result = mysqli_query($conn, $sql);



// Vérification de l'exécution de la requête
if ($result) {
    echo "La donnée a été ajoutée avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'ajout de la donnée : " . mysqli_error($conn);
}

?>