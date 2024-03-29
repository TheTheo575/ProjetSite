<?php
    include_once 'setting.php';
    $accueil = true; // L'utilisateur est bien passé par l'accueil
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
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/accueil_eng.php" class="lien-interne"><b><u>FRA</u></b>/ENG</a>
            <a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>
            <a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>
        </div>

    </nav>

    <main><!--partie en charge du contenu principale de la page-->


        <div class="conteneur-accueil">
            <p style="text-decoration:underline;">A propos de nous</p><!--paragraphe avec le texte souligné-->
            <!--contenu textuel de la page-->
            <p>Bienvenue à "La Ch'tite Mamie" – l'endroit où la douceur des frites rencontre le goût du partage !</p>
            <br />
            <h3>La Ch'tite Mamie : Une Histoire de Saveurs et de Sourires</h3>
            <p>
                "La Ch'tite Mamie" se dresse comme un adresse à ne surtout pas louper, enveloppé de l'arôme irrésistible des frites fraîchement préparées.
                Derrière ce petit coin de paradis croustillant se trouve une femme exceptionnelle : la bien-aimée Mamie, gardienne du secret des frites parfaites.
            </p>
            <h3>La Douce Vie de Mamie</h3>
            <p>La Ch'tite Mamie, connue de tous pour son sourire chaleureux et sa passion pour la pomme de terre, a consacré sa vie à l'art de la frite. Née et élevée dans le nord de la France, elle a apporté avec elle le charme et le réconfort d'une cuisine traditionnelle imprégnée d'amour.</p>
            <p>Tout son art, elle l'a appris auprès du célèbre Jean-Paul, le roi de la frite du RCL depuis 50 ans. Elle a peaufiné sa recette secrète jour et nuit grâce à l'aide de son tuteur Jean-Paul.</p>
            <center>
                <img src="../images/Baraque-Frite.jpg" alt="baraque à frite du stade bollaert" class="imgfriterie" />
            </center>
            <h3>Le Secret de la Ch'tite Mamie</h3>
            <p>Que serait "La Ch'tite Mamie" sans son secret bien gardé ? Mamie murmure à chaque frite tout l'amour qu'elle a accumulé pour la pomme de terre durant ces dernières années. Ce secret ancestral donne à chaque bouchée une explosion de saveurs, un mélange subtil de croustillant et de moelleux.</p>
            <h3>Au-Delà des Frites</h3>
            <p>Mais "La Ch'tite Mamie" offre bien plus que des frites exquises. C'est un lieu où les gens se réunissent, où les rires résonnent et où les histoires se partagent autour d'une portion généreuse. Mamie elle-même est une figure maternelle pour la communauté locale, toujours prête à offrir un sourire et une oreille attentive.</p>
            <h3>Venez, Savourez, Partagez</h3>
            <p>"La Ch'tite Mamie" n'est pas seulement une baraque à frites ; c'est un lieu où l'amour pour la frite et la communauté se rencontrent. Venez goûter à l'héritage de Mamie, laissez-vous envelopper par l'atmosphère chaleureuse, et faites partie de l'histoire délicieuse de "La Ch'tite Mamie". Venez, savourez, partagez l'amour, une frite à la fois. </p>
        </div>
        <div class="horaires">
            <img src="../images/carte.jpg" alt="carte des horaires" />
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