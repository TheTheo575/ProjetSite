<?php
    include_once 'setting.php';
    
    // if ($accueil == false || !isset($accueil)) {
    //     header('location:accueil_eng.php');
    // }
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Partners</title>
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Partners">
    <meta name="description" content="Ch'tite mamie's partner">

    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

</head>

<body>

    <header>

        <a href="../pages_php/accueil_eng.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <p style="display:inline;">Ch'tite mamie</p>

    </header>

    <nav>

        <div class="conteneur-nav">
            <a href="../pages_php/accueil_eng.php" class="lien-interne">Home</a>
            <a href="../pages_php/menu_eng.php" class="lien-interne">Menu</a>
            <a href="../pages_php/collab.php" class="lien-interne">FRA/<b><u>ENG</u></b></a>
            <a href="../pages_php/reservation_eng.php" class="lien-interne">Order</a>
            <a href="../pages_php/collab_eng.php" class="lien-interne"><b><u>Partnership</u></b></a>
        </div>

    </nav>

    <main>

        <!--début contenu de la page-->

        <h1><u>Our Partnerns</u></h1><!--nom principale de la page-->

        <h2><u>Here, we eat local food</u></h2><!--corps de présentation de nos collaborateurs-->
        <p>We are in partership with different supliers in the region</p>
        <div class="conteneur_collab">
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Guillaume-->
                <img src="../images/Guillaume-Logo.png" alt="picture of Guillaume" class="photocollab">
                <br><strong>Guillaume</strong>
                <br>Farmer located in quaëdypre
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de François-->
                <img src="../images/Francois-Logo.png" alt="picture of Francois" class="photocollab">
                <br><strong>François</strong>
                <br>Winemaker located in Lievin
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Gerard-->
                <img src="../images/Gerard-Logo.png" alt="picture of Gerard" class="photocollab">
                <br><strong>Gérard</strong>
                <br>Maraicher located La Poissonnerie
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Didier-->
                <img src="../images/Didier-Logo.png" alt="picture of Didier" class="photocollab">
                <br><strong>Didier</strong>
                <br>breeder located in Buire-le-Sec
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Pierrick-->
                <img src="../images/Pierrick-Logo.png" alt="picture of Pierrick" class="photocollab">
                <br><strong>Pierrick</strong>
                <br>Brewer located in Ercheu
            </div>
        </div>

        <h2><u>Our official supliers</u></h2>
        <div class="conteneur_collab">
            <!--Conteneur div, contenant tout nos partenaires officiel, avec la même classe que le conteneur précédent-->
            <div class="element_collab">
                <!--image avec texte dans une division pour le partenaire : Goudale-->
                <img src="../images/goudale.png" alt="Logo Goudale" class="photocollab">
                <br><strong>Goudale</strong>
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

        <h2><u>Meet us in your favorite events</u></h2>
        <div class="conteneur_collab">
            <!--Conteneur div, contenant tout nos êvenement auquel on participe, avec la même classe que les conteneurs précédent-->
            <div class="element_collab">
                <!--image avec texte dans une division pour l'êvenement : Le tour de France-->
                <img src="../images/tour_de_france-logo.png" alt="Logo tour de france" class="photocollab">
                <br><strong>Le Tour de France</strong>
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour l'êvenement : Les JO 2024-->
                <img src="../images/paris2024-logo.png" alt="Logo JO 2024" class="photocollab">
                <br><strong>JO Paris 2024</strong>
            </div>
        </div>

    </main>

    <footer>
        <div id="footer">
        <div class="contact">
            <p class="foot">Contact us</p>
            <p>Phone : +33 3 16 14 23 XX</p>
            <p>Mail : ChtiteMamie@gmail.com</p>
        </div>

        <div class="carte">
        <p class="foot">Our location :</p>
        <div id="rectanglecarte">
        <!--code permetant l'affichage d'une map avec un emplacement-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.5773028165336!2d2.430749075747542!3d50.968518971695794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf360f6b0d15b%3A0x1fde110afbf3f137!2sBergues!5e0!3m2!1sfr!2sfr!4v1702378398429!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

        <div class="reseaux">
        <p class="foot">Social Networks :</p>
        <!--permet de d'afficher des images qui servent aussi de lien-->
        <div class="conteneur-image">
            <a href="https://twitter.com/LachtiteMami" class="lien-image" target="_blank"><img src="../images/twitter.png" alt="logo twitter"></a>
            <a href="https://www.instagram.com/la_chtite_mamie" class="lien-image" target="_blank"><img src="../images/instagram.png" alt="logo insta"></a>
            <a href="http://facebook.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/facebook.png" alt="logo facebook"></a>
        </div>
        </div>
        </div>

    </footer>

</body>

</html>
