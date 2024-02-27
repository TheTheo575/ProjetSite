<?php
    include_once 'setting.php';
    include_once 'accueil.php';
    include_once 'accueil_eng.php';
    
    // if ($accueil == false || !isset($accueil)) {
    //     header('location:accueil.php');
    // }
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Partenaires</title><!--partenaire-->
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Réservation">
    <meta name="description" content="Collaborateur de la ch'tite mamie">
    <!--icon pour le logo de la page-->
    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">
    <!--liens vers la page CSS-->
</head>

<body>

    <header>
        <!--partie en charge du logo et du Nom de la pages en haut du site-->
        <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <p style="display:inline;">Ch'tite mamie</p>

    </header>

    <nav>
        <!--menu de navigation vers les différentes page du site-->
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/collab_eng.php" class="lien-interne"><b><u>FRA</u></b>/ENG</a>
            <a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>
            <a href="../pages_php/collab.php" class="lien-interne"><b><u>Partenaires</u></b></a>
        </div>

    </nav>

    <main>
        <!--début contenu de la page-->

        <h1><u>Nos Collaborateurs</u></h1><!--nom principale de la page-->

        <h2><u>Chez nous on mange local</u></h2><!--corps de présentation de nos collaborateurs-->
        <p>Nous sommes en partenariat avec divers éleveurs et producteurs de la région</p>
        <div class="conteneur_collab">
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Guillaume-->
                <img src="../images/Guillaume-Logo.png" alt="photo de Guillaume" class="photocollab">
                <br><strong>Guillaume</strong>
                <br>Agriculteur situé à quaëdypre
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de François-->
                <img src="../images/Francois-Logo.png" alt="photo de Francois" class="photocollab">
                <br><strong>François</strong>
                <br>Vigeron situé à Lievin
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Gerard-->
                <img src="../images/Gerard-Logo.png" alt="photo de Gerard" class="photocollab">
                <br><strong>Gérard</strong>
                <br>Maraicher situé à La Poissonnerie
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Didier-->
                <img src="../images/Didier-Logo.png" alt="photo de Didier" class="photocollab">
                <br><strong>Didier</strong>
                <br>Eleveur situé à Buire-le-Sec
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Pierrick-->
                <img src="../images/Pierrick-Logo.png" alt="photo de Pierrick" class="photocollab">
                <br><strong>Pierrick</strong>
                <br>Brasseur situé à Ercheu
            </div>
        </div>

        <h2><u>Nos fournisseurs officiels</u></h2>
        <div class="conteneur_collab">
            <!--Conteneur div, contenant tout nos partenaires officiel, avec la même classe que le conteneur précédent-->
            <div class="element_collab">
                <!--image avec texte dans une division pour le partenaire : Goudale-->
                <img src="../images/goudale.png" alt="Logo Goudale" class="photocollab">
                <br><strong>La Goudale</strong>
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le partenaire : Coca-Cola-->
                <img src="../images/Coca-Cola-logo.png" alt="Logo Coca" class="photocollab">
                <br><strong>Coca-Cola</strong>
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le partenaire : Heinz-->
                <img src="../images/Heinz-logo.png" alt="Logo Heinz" class="photocollab">
                <br><strong>Heinz</strong>
            </div>
        </div>

        <h2><u>Retrouvez-nous lors de vos évènement favoris</u></h2>
        <div class="conteneur_collab">
            <!--Conteneur div, contenant tout nos êvenement auquel on participe, avec la même classe que les conteneurs précédent-->
            <div class="element_collab">
                <!--image avec texte dans une division pour l'êvenement : Le tour de France-->
                <img src="../images/tour_de_france-logo.png" alt="Logo tour de france" class="photocollab">
                <br><strong>Le Tour de France</strong>
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour l'êvenement : Les JO 2024-->
                <img src="../images/paris2024-logo.png" alt="Logo des JO de Paris 2024" class="photocollab">
                <br><strong>JO de Paris</strong>
            </div>
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
