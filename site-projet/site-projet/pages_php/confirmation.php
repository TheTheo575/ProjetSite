<?php
    session_start();
    include_once 'setting.php';
    
    if (!isset($_SESSION['accueil'])|| !$_SESSION['accueil']) { // Si l'utilisateur n'est pas passé par l'accueil on l'y renvoie
        header('location:accueil.php');
    }
?>
	
<!DOCTYPE html>
<html lang="fr">

    <head>

        <title>Cofirmation</title>
        <meta charset="utf-8">

        <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
        <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Accueil">
        <meta name="description" content="Confirmation de réservation">
        <meta http-equiv="refresh" content="5; URL=accueil.html">

        <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
        <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

    </head>

    <body>

        <header>
            <!--Tête du contenu (haut de page)-->

            <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
            <!--liens pour faire apparaitre le logo du site-->
            <p style="display:inline;">Ch'tite mamie</p><!--Paragraphe pour le Nom du restaurant-->

        </header>

        <nav>
            <!--Menu de navigation-->
            <!--Tous ce code permet d'accéder au différentes pages de notre site ( ce sont des liens)-->
            <div class="conteneur-nav">
                <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
            </div>

        </nav>

        <main>

            <div class="conteneur-confirmation">

                <p>Votre réservation a bien été prise en compte</p>

            </div>

        </main>

        <?php
    include "footer.php";
    ?>

    </body>

</html>
