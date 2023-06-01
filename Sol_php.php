<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/forme_général.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/tableau.css" media="screen"/>
  <title>Solution php</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul class="ul3">
			
		   <li><a href="index.php" >Accueil</a></li>
		   <li><a href="Bat_1.php">Batiment 1</a></li>
		   <li><a href="Bat_2.php">Batiment 2</a></li>
		   <li><a href="Sol_dock.php">Solution docker</a></li>

    </ul>
   </nav>
  </header> 
  
    <section>
   	
	<h2>En quoi elle consiste ? </h2>
		<p> La solution php consiste à créer une base de données et les faires apparaître dans un site web dynamique.<p>
		
&emsp;

	<h2>Explication de la réalisation du projet pour la solution php</h2>
		<p> Pour réaliser cela, en premier nous avons récupéré les données grâce à un script <strong>bash</strong> et <strong>MQTT</strong>, donc grâce au système de souscrition à des broker.</p>
		<p>Nous avons ensuite utiliser pour stocker les données une base de données <strong> MySQL</strong>, voici une capture du shéma de la base de donnée.</p>
 
		<a TARGET="_blank" href="images/sql.png">
		<img class="image" alt="base sql" src="images/sql.png"> </a>
	
		<p> Pour finir, nous avons un dernier scripte <strong>bash</strong> qui permet de placer les données dans un tableau sur les différentes 
	pages de ce site, grâce à du code en <strong>PHP</strong> </p>
	
	</section>
	
&emsp;

 <footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>BUT1</li>
	</ul>  
  </footer>
  
</body>
</html>