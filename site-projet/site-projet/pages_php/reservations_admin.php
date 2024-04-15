<?php
    session_start();
    include_once 'setting.php';

    // Marque le passage de l'utilisateur par l'accueil
    $_SESSION['accueil']=true;
    $_SESSION["current_page"]="accueil";
?>
	
<!DOCTYPE html>
<html lang="fr">

<head><!--partie en charge de stocker les infos de la page-->

    <title>Réservations</title><!--Titre de la page-->
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

    <?php
    include "nav.php";
    ?>

    <main><!--partie en charge du contenu principale de la page-->



    </main>
    
    <?php
    include "footer.php";
    ?>
</body>

</html>