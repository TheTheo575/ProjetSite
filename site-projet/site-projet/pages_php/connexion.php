<?php
    session_start();
    include_once 'setting.php';

    if(isset($_POST['authentification'])){
		$login=$_POST['login'];
		$mdp=$_POST['passwd'];
		
		if( $login=="client" && $mdp=="client123" ){ //si un utilisateur normal (client): s'assurer que le nom et le mot-de-passe sont corrects
			$_SESSION["nom"]=$_POST['login']; //Variable de session "nom"
			$_SESSION["authentifie"]=true;//Variable de session "authentifie"
			$_SESSION["admin"]=false; //Variable de session "admin"
			header("Location: accueil.php"); //redirection vers la page general.php
		}
		else if ($login=="admin" && $mdp=="admin123"){//si utilisateur Admin
			$_SESSION["nom"]=$_POST['login']; //Variable de session "nom"
			$_SESSION["authentifie"]=true;//Variable de session "authentifie"
			$_SESSION["admin"]=true; //Variable de session "admin"
			header("Location: accueil.php"); //redirection vers la page gestion.php
		}
	}
?>
	
<!DOCTYPE html>
<html lang="fr">

<head><!--partie en charge de stocker les infos de la page-->

    <title>Accueil</title><!--Titre de la page-->
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Accueil">
    <meta name="description" content="Site de la ch'tite mamie">

    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

</head>

<body><!--partie du code  en charge du contenu-->

    <header><!--Tête du contenu (haut de page)-->

        <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
       <!--liens pour faire apparaitre le logo du site-->
        <p style="display:inline;">Ch'tite mamie</p><!--Paragraphe pour le Nom du restaurant-->
        <?php 
        if(isset($_SESSION['autentifie'])==false || $_SESSION['authentifie']=false){
            ?>
            <a href="connexion.php" class="lien-interne" style="fontsize: 12px;"><b><u>Se connecter</u></b></a>
            <?php
        }
        else{
            ?>
            <a href="logout.php" class="lien-interne" style="fontsize: 12px;"><b><u>Se déconnecter</u></b></a>
            <?php
        }
        ?>

    </header>

    <nav><!--Menu de navigation-->
    <!--Tous ce code permet d'accéder au différentes pages de notre site ( ce sont des liens)-->
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/accueil_eng.php" class="lien-interne"><b><u>FRA</u></b>/ENG</a>
            <a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>
            <a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>
        </div>

    </nav>

    <main><!--partie en charge du contenu principale de la page-->		
		<!-- Formulaire d'authentification-->
        <div class="formreserv">
     	    <form action="" method="post">
     		    <fieldset>
     	        	<legend>Formulaire d'authentification</legend>
     		    	<label>Se connecter :</label>
     			    <input type="text" name="login" placeholder="Entrez votre identifiant" required>
                    <ul>
     			    <label>Mot de passe :</label>
     			    <input type="password" name="passwd"  placeholder="Entrez votre mot de passe" required>
                    <ul>
     			    <input type="submit" name="authentification" value="Se connecter"/>
     		    </fieldset>
     	    </form>
		<?php
			
		?>
        </div>
    </main>

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
        <a href="./cookies.php" id="cookies">Cookies d'utilisation</a>
        </div>

    </footer>

</body>

</html>