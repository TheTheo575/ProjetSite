<?php
    session_start();
    include_once 'setting.php';
    
    $S_SESSION['accueil']=true;
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Home</title><!--titre du document-->
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Home">
    <meta name="description" content="ch'tite mamie website">
    <!--logo du site sur la barre de recherche-->
    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">
    <!--liens vers le doc css-->
</head>

<body>

    <header>
        <!--titre et logo du site en haut de la page-->
        <a href="../pages_php/accueil_eng.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <p style="display:inline;">Ch'tite mamie</p>

    </header>

    <nav>
        <!--menu de navigation vers les autres pages du site-->
        <div class="conteneur-nav">
            <a href="../pages_php/accueil_eng.php" class="lien-interne"><b><u>Home</u></b></a>
            <a href="../pages_php/menu_eng.php" class="lien-interne">Menu</a>
            <a href="../pages_php/accueil.php" class="lien-interne">FRA/<b><u>ENG</u></b></a>
            <a href="../pages_php/reservation_eng.php" class="lien-interne">Order</a>
            <a href="../pages_php/collab_eng.php" class="lien-interne">Partnership</a>
        </div>

    </nav>

    <main>

        <div class="conteneur-accueil">
            <!--contenu textuel de la page compose de pargarphe et de titre-->
            <p style="text-decoration:underline;">About us</p>

            <p>Welcome to "La Ch'tite Mamie" – the place where the sweetness of fries meets the taste of sharing!</p>
            <br />
            <h3>La Ch'tite Mamie : A Story of Flavors and Smiles</h3>
            <p>
                “La Ch'tite Mamie” stands out as an address not to be missed, enveloped in the irresistible aroma of freshly prepared fries.
                Behind this little corner of crispy paradise is an exceptional woman: the beloved Mamie, keeper of the secret to perfect fries.
            </p>
            <h3>The Sweet Grandma's Life</h3>
            <p>La Ch'tite Mamie, known to everyone for her sweet smile and her passion for potatoes, devoted her life to the art of fries. Born and raised in the north of France, she brought with her the charm and comfort of traditional cuisine infused with love.</p>
            <p>She learned all her art from the famous Jean-Paul, the king of fries at the RCL since 50 years. She perfected her secret recipe day and night with the help of her tutor Jean-Paul.</p>
            <center>
                <img src="../images/Baraque-Frite.jpg" alt="chip shop at Bollaert stadium" class="imgfriterie" />
            </center>
            <h3>"La Ch'tite Mamie"'s' secret</h3>
            <p>What would “La Ch’tite Mamie” be without its well-kept secret? Grandma murmurs with each fry all the love she has accumulated for potatoes over the last few years. This ancestral secret gives each bite an explosion of flavors, a subtle blend of crispy and soft.</p>
            <h3>More than fries</h3>
            <p>But “La Ch’tite Mamie” offers much more than exquisite fries. It's a place where people come together, where laughter resonates and stories are shared over a generous portion. Mamie herself is a motherly figure to the local community, always ready to offer a smile and a listening ear.</p>
            <h3>Come, Enjoy, Share</h3>
            <p>“La Ch’tite Mamie” is not just a chip shop; it's a place where a love for fries and community come together. Come taste Mamie's heritage, let yourself be enveloped by the warm atmosphere, and become part of the delicious story of "La Ch'tite Mamie". Come, enjoy, share the love, one fry at a time. </p>
        </div>
        <div class="horaires">
            <img src="../images/carte.jpg" alt="carte des horaires" />
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
            <a href="http://twitter.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/twitter.png" alt="logo twitter"></a>
            <a href="https://www.instagram.com/la_chtite_mamie" class="lien-image" target="_blank"><img src="../images/instagram.png" alt="logo insta"></a>
            <a href="http://facebook.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/facebook.png" alt="logo facebook"></a>
        </div>
        </div>
        </div>

    </footer>

</body>

</html>