<?php
    // Si l'identifiant de la réservation est présent dans l'URL, récupère les données de la réservation à modifier
    if(isset($_GET["identifiant"])){
        try {
            require("connexion.php"); // Inclut le fichier de connexion à la base de données
            
            // Prépare une requête SQL pour récupérer les données de la réservation à modifier (remplacez "???" par le nom de votre table contenant les réservations)
            $selectReservationStmt = $conn->prepare("SELECT * FROM ??? WHERE Id = ?");
            // "???" : Remplacez ceci par le nom de votre table contenant les réservations
            
            // Exécute la requête SQL en remplaçant le paramètre par l'identifiant de la réservation récupéré depuis l'URL
            $selectReservationStmt->execute(array($_GET['identifiant']));
            
            // Récupère les résultats de la requête SQL sous forme de tableau associatif
            $reservationData = $selectReservationStmt->fetch(PDO::FETCH_ASSOC);
            
            // Récupère les valeurs spécifiques à modifier depuis le tableau associatif
            $id = $_GET['identifiant'];
            $nom = $reservationData['Nom'];
            $prenom = $reservationData['Prenom'];
            $nmbpers = $reservationData['NmbPers'];
            $date = $reservationData['DateR'];
            $heure = $reservationData['Heure'];
            $tel = $reservationData['Téléphone'];
            
            $conn = NULL; // Ferme la connexion à la base de données
        } catch(Exception $e) {
            die("Erreur : " . $e->getMessage()); // En cas d'erreur, affiche le message d'erreur et arrête le script
        }
    }

    // Si le formulaire de modification est soumis (le bouton "Modifier" est cliqué)
    if(isset($_POST["Modifier"])){
        try {
            require("connexion.php"); // Inclut le fichier de connexion à la base de données
            
            // Prépare une requête SQL pour mettre à jour les données de la réservation dans la table (remplacez "adherents" par le nom de votre table contenant les réservations)
            $updateReservationStmt = $conn->prepare("UPDATE adherents SET Nom = ?, Prenom = ?, NmbPers = ?, DateR = ?, Heure = ?, Téléphone = ? WHERE Id = ?");
            
            // Exécute la requête SQL en remplaçant les paramètres par les valeurs soumises dans le formulaire
            $updateReservationStmt->execute([
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['nmbpers'],
                $_POST['date'],
                $_POST['heure'],
                $_POST['tel'],
                $_POST['id']
            ]);
            
            $conn = NULL; // Ferme la connexion à la base de données
            
            // Redirige vers une autre page après la modification de la réservation (changez "html.php" par le nom de la page de votre choix)
            header("Location:html.php"); // Redirige vers html.php (changez le nom du fichier cible selon vos besoins)
        } catch(Exception $e) {
            die("Erreur : " . $e->getMessage()); // En cas d'erreur, affiche le message d'erreur et arrête le script
        }
    }
?>


<!-- Formulaire de modification -->
<!DOCTYPE html>
<html lang="fr">
    <head><!--partie en charge de stocker les infos de la page-->
        <title>Page Modification Admin</title><!--Titre de la page-->
        <meta charset="utf-8" />
        <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
		<meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Accueil">
		<meta name="description" content="Partie modification de la partie admin du site de la ch'tite mamie">
		
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


		<div class="conteneur-accueil">

			<h1>Formulaire de Modification :</h1>
			<form action="modifier.php" method="post">
				<fieldset>
					<legend>Modifier une réservation</legend>
					<input type="hidden" id="id" name="id" value="<?php if(isset($id)) { echo $id; } ?>"><br/>
					
					<label for="nom">Nom : </label>
					<input type="text" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>"><br/>
					
					<label for="prenom">Prénom : </label>
					<input type="text" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>"><br/>
					
					<label for="email">Nombre Personnes : </label>
					<input type="text" id="nmbpers" name="nmbpers" value="<?php if(isset($nmbpers)) { echo $nmbpers; } ?>"><br/>
					
					<label for="date">Date : </label>
					<input type="date" id="date" name="date" value="<?php if(isset($date)) { echo $date; } ?>"><br/>
						
					<label for="heure">Heure : </label>
					<input type="time" id="heure" name="heure" value="<?php if(isset($heure)) { echo $heure; } ?>"><br/>

					<label for="tel">Téléphone : </label>
					<input type="tel" id="tel" name="tel" value="<?php if(isset($tel)) { echo $tel; } ?>"><br/>

					<input Type="submit" name="Modifier" value="Modifier">
				</fieldset>
			</form>

		</div>
	</body>

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


</html>