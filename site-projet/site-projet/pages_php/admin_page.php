<?php
    session_start();
    include_once 'setting.php';

    // Marque le passage de l'utilisateur par l'accueil
    $_SESSION['accueil']=true;
?>

<!DOCTYPE html>
<html lang="fr">
    <head><!--partie en charge de stocker les infos de la page-->
        <title>Page Admin</title><!--Titre de la page-->
        <meta charset="utf-8" />
        <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
		<meta name="description" content="Partie admin du site de la ch'tite mamie">
		
		<link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    	<link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

    </head>
    <body><!--partie du code en charge du contenu-->

		<header><!--Tête du contenu (haut de page)-->
			<a href="../pages_html/accueil.html" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
			<!--liens pour faire apparaitre le logo du site-->
			<p style="display:inline;">Ch'tite mamie</p><!--Paragraphe pour le Nom du restaurant-->
		</header>

		<nav><!--Menu de navigation-->
		<!--Tous ce code permet d'accéder au différentes pages de notre site ( ce sont des liens)-->
			<div class="conteneur-nav">
				<a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>
				<a href="../pages_php/menu.php" class="lien-interne">Menu</a>
				<a href="../pages_php/accueil_eng.php" class="lien-interne"><b><u>FRA</u></b>/ENG</a>
				<a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>
				<a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>
				<?php 
					if(!isset($_SESSION['authentifie']) || $_SESSION['authentifie']=false){
						?>
						<a href="connexion.php" class="lien-interne" style="fontsize: 2px;">Se connecter</a>
						<?php
					}
					else{
						?>
						<a href="logout.php" class="lien-interne" style="fontsize: 2px;">Se déconnecter</a>
						<?php
					}
				?>
			</div>
		</nav>


		<main><!--partie en charge du contenu principale de la page-->

			<div class="conteneur-accueil">
				<h3>Partie administration :</h3>
				<p>
					Bonjours à vous, vous êtes actuellement connecté sur le compte administrateur.
					Voici ls détails des permissions de votre compte :
				</p>
				<ol>
					<li>Accès aux réservations</li>
					<li>Ajouter</li>
					<li>Modifier</li>
					<li>Supprimer</li>
				</ol>
			

				<h3>Zone de Manipulation :</h3>
				<?php
			
					try{
						require("connexion.php"); //Inclut le fichier de connexion à la base de données
						
						//Il manque le nom de la table !
						$reqPrep = "SELECT * FROM ???";//La requete SQL SELECT
						//Il manque le nom de la table !

						$req = $conn->prepare($reqPrep);//Préparation de la requete
						$req->execute();//Execute la requete
						
						$resultat = $req->fetchAll(PDO::FETCH_ASSOC); //Récupération des résultats de la requete sous forme d'un tableau associatif
						
						//Affichage sous forme d'un HTML
						echo "<table>
									<tr>
										<th>id</th>
										<th>Nom</th>
										<th>Prénom</th>
										<th>Nombre Personnes</th>
										<th>Date</th>
										<th>Heure</th>
										<th>Téléphone</th>
										<th colspan=2>Action</th>
									</tr>";
							
							//Parcours des résultats et affichage de chaque ligne dans le tableau HTML
							foreach($resultat as $row){
								echo "<tr>
									<td>$row[Id]</td>
									<td>$row[Nom]</td>
									<td>$row[Prenom]</td>
									<td>$row[NmbPers]</td>
									<td>$row[DateR]</td>
									<td>$row[Heure]</td>
									<td>$row[Tel]</td>
									<td><a href='./modifier.php?identifiant=".$row['Id']."'>Modifier</a></td>
									<td><a href='./supprimer.php?identifiant=".$row['Id']."'>Supprimer</a></td>
								<tr/>";
							}
							
						echo "</table>"; //Fin tableau
						
						$conn = NULL; //On ferme la connexion à la base de donnée
					}                 
					catch(Exception $e){
						//Gestion des exceptions : affichage d'un message d'erreur
						echo "Erreur : " . $e->getMessage();
					}
				?>


				<!-- Formulaire d'ajout -->
				<h3>Zone d'ajout :</h3> <!-- Titre de la section du formulaire -->
				<form name="ajout" action="ajouter.php" method="post"> <!-- Début du formulaire -->
					<fieldset>
						<legend>Ajouter une réservation</legend> <!-- Légende du champset du formulaire -->
						
						<!-- Champ pour saisir le nom -->
						<label for="nom">Nom : </label>
						<input type="text" id="nom" name="nom"><br/> <!-- Champ de texte pour le nom -->
						
						<!-- Champ pour saisir le prénom -->
						<label for="prenom">Prénom : </label>
						<input type="text" id="prenom" name="prenom"><br/> <!-- Champ de texte pour le prénom -->
						
						<!-- Champ pour saisir le nombre de personnes -->
						<label for="nmbpers">Nombre Personnes : </label>
						<input type="text" id="nmbpers" name="nmbpers"><br/> <!-- Champ de texte pour le nombre de personnes -->
						
						<!-- Champ pour saisir la date de réservation -->
						<label for="date">Date réservation : </label>
						<input type="date" id="date" name="date"><br/> <!-- Champ de sélection de la date -->
						
						<!-- Champ pour saisir l'heure de réservation -->
						<label for="heure">Heure : </label>
						<input type="time" id="heure" name="heure"><br/> <!-- Champ de sélection de l'heure -->
						
						<!-- Champ pour saisir le numéro de téléphone -->
						<label for="tel">Téléphone : </label>
						<input type="tel" id="tel" name="tel"><br/> <!-- Champ de texte pour le numéro de téléphone -->
						
						<!-- Bouton de soumission du formulaire -->
						<input type="submit" name="Ajouter" value="Ajouter"> <!-- Bouton "Ajouter" -->
					</fieldset>
				</form> <!-- Fin du formulaire -->

			</div>

		</main>



		<!--footer utile pr l'admin?-->
		<footer>
			<div id="footer">
			<div class="contact">
			<p class="foot">Nous contacter</p>
			<p>Téléphone : +33 3 16 14 23 XX</p>
			<p>Mail : ChtiteMamie@gmail.com</p>
			</div>

			<div class="carte">
			<p class="foot">Où nous trouver :</p>
			<div id="rectanglecarte">
			<!--code permetant l'affichage d'une map avec un emplacement-->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.5773028165336!2d2.430749075747542!3d50.968518971695794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf360f6b0d15b%3A0x1fde110afbf3f137!2sBergues!5e0!3m2!1sfr!2sfr!4v1702378398429!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			</div>

			<div class="reseaux">
			<p class="foot">Nos Réseaux :</p>
			<!--permet de d'afficher des images qui servent aussi de lien-->
			<div class="conteneur-image">
				<a href="https://twitter.com/LachtiteMami" class="lien-image" target="_blank"><img src="../images/twitter.png" alt="logo twitter"></a>
				<a href="https://www.instagram.com/la_chtite_mamie" class="lien-image" target="_blank"><img src="../images/instagram.png" alt="logo insta"></a>
				<a href="http://facebook.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/facebook.png" alt="logo facebook"></a>
			</div>
			</div>
			<a href="./cookies.html" id="cookies">Cookies d'utilisation</a>
			</div>
		</footer>
		<!--footer utile pr l'admin?-->

    </body>
</html>