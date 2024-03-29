<?php
    include_once 'setting.php';
    
    // if ($accueil == false || !isset($accueil)) {
    //     header('location:accueil.php');
    // }
?>
	
<!DOCTYPE html>
<html lng=""fr>

    <head>

        <title>Cookies</title>
        <meta charset="utf-8">

        <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
        <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Accueil">
        <meta name="description" content="Confirmation de réservation">

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
            <div id="blaguecookie">
            <div id="photocookie">
                <img src="../images/Plats/cookie.png" alt="Cookies">
            </div>
            <div>Mince , on dirait que Mamie n'a pas pas compris le principe de "Cookies" sur Internet...</div>
            </div>
        </main>

        <footer>
            <div id="footer">
                <div class="contact">
                    <p>Téléphone : +33 3 16 14 23 XX</p>
                    <p>Mail : ChtiteMamie@gmail.com</p>
                </div>

                <div class="carte">
                    <p>Où nous trouver :</p>
                    <div id="rectanglecarte">
                        <!--code permetant l'affichage d'une map avec un emplacement-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.5773028165336!2d2.430749075747542!3d50.968518971695794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf360f6b0d15b%3A0x1fde110afbf3f137!2sBergues!5e0!3m2!1sfr!2sfr!4v1702378398429!5m2!1sfr!2sfr" width="400px" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="reseaux">
                    <p>Nos Réseaux :</p>
                    <!--permet de d'afficher des images qui servent aussi de lien-->
                    <div class="conteneur-image">
                        <a href="https://twitter.com/LachtiteMami" class="lien-image" target="_blank"><img src="../images/twitter.png"></a>
                        <a href="http://instagram.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/instagram.png"></a>
                        <a href="http://facebook.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/facebook.png"></a>
                    </div>
                </div>
            </div>

        </footer>

    </body>

</html>
