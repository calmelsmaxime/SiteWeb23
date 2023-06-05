<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/forme_général.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/tableau.css" media="screen"/>
  <title>Administration</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul class="ul3">
			
		   <li><a href="index.php" >Accueil</a></li>
		   <li><a href="consultation.php">Consultation</a></li>
		   <li><a href="gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="page_gest.php">Gestionnaire</a></li>
		   <li><a href="#">Administrateur</a></li>

    </ul>
   </nav>
  </header> 
  
  <section>
  <h2>Se connecter en administrateur</h2>
		<form action="connect.php" method="post">
			<label for="username">Nom d'utilisateur :</label><br>
			<input type="text" id="username" name="username"><br>
			
			<label for="c">Mot de passe :</label><br>
			<input type="password" id="password" name="password"><br>
			
			<input type="submit" value="Se connecter">
		</form>
 </section>


<footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>BUT1</li>
	</ul>  
  </footer>

</body>
</html>