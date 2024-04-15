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
    $_SESSION["current_page"]="connexion";
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

    </header>

    <nav><!--Menu de navigation-->
    <!--Tous ce code permet d'accéder au différentes pages de notre site ( ce sont des liens)-->
    <?php
    if(!isset($_SESSION['authentifie']) || $_SESSION['authentifie']=false || $_SESSION['admin']=false){
        ?>
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
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
        <?php
    }
    elseif($_SESSION['admin']=true){
        ?>
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/reservation.php" class="lien-interne">Réservations</a>
            <a href="logout.php" class="lien-interne" style="fontsize: 2px;"><b><u>Se déconnecter</u></b></a>
        </div>
        <?php
    }
    ?>
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

    <?php
    include "footer.php";
    ?>

</body>

</html>