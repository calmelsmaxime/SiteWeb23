<?php 

require '../../connexion_bd.php';


$ID_Bat = $_POST['ID_Bat'];

// Query to delete measurements in the 'mesure' table
$sql = "DELETE FROM mesure
		WHERE ID_Cap LIKE '$ID_Bat%'";
$result = mysqli_query($conn, $sql);

// Query to delete measurements and sensors from the 'capteur' table
$sql2 = "DELETE FROM capteur
		WHERE ID_Bat LIKE '$ID_Bat%'";
$result2 = mysqli_query($conn, $sql2);

// Query to delete the building, measurements, and sensors from the 'building' table
$sql3 = "DELETE FROM batiment 
		WHERE ID_Bat LIKE '$ID_Bat%'";
$result3 = mysqli_query($conn, $sql3);

if ($result && $result2 && $result3) {
    echo "Le bâtiment a été supprimé avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression du bâtiment : " . mysqli_error($conn);
}

?>