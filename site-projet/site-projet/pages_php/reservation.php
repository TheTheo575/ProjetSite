<?php
    include_once 'setting.php';
    
    // if ($accueil == false || !isset($accueil)) {
    //     header('location:accueil.php');
    // }
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Réservation</title><!--titre de la page-->
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Réservation">
    <meta name="description" content="Reservation pour manger à la ch'tite mamie">

    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png"><!--image de la chtite mamie pour représenter la page-->
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">
    <!--liens vers  le doc CSS-->
</head>

<body>

    <header>

        <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <p style="display:inline;">Ch'tite mamie</p>
        <!--partie du Html en haut de la page avec le logo et le nom du réstaurant-->
    </header>

    <nav>

        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/reservation_eng.php" class="lien-interne"><b><u>FRA</u></b>/ENG</a>
            <a href="../pages_php/reservation.php" class="lien-interne"><b><u>Réservation</u></b></a>
            <a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>
        </div>
        <!--menu de navigation amenant aux différentes page du site-->
    </nav>

    <main>
    <div class="formreserv">
        <div class="reservation">
            <form method="post" action="#">
                <fieldset>
                    <!--Zone permettant de creer une interface de questionnaire-->
                    <legend>Votre réservation : </legend><!--nom du fieldset-->
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" required/><!--zone de texte a inserer-->
                    <img src="../images/Assiette.png" alt="LogoAssiette" id="Assiette"> <p style="display:inline;"></p>
                    <br><br />
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" placeholder="votre Prénom" required/>
                    <br><br /><!--zone de texte à insérer pour le prénom-->
                    <label >Nombre de Personnes: </label>
                    <select class="nbr" name="nbr" required>
                        <!--zone de sélection d'option -->
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                    <br><br />
                    <label >Date de Réservation: </label>
                    <input type="date" name="date" required/><!--zone de selection de date sur un calendrier-->
                    <br><br />
                    <label >Heure de réservation: </label>
                    <input type="time" name="hour" required/><!--zone de selection de d'horaire sur une horloge-->
                    <br><br />
                    <label >Numero de téléphone: </label>
                    <input type="tel" name="tel" placeholder="Numéro de téléphone" required/><!--zone de texte pour le numéro -->
                    <br><br />
                    <!--<input type="submit" name="Réserver" id="reservation" value="Reserver" />--><!--bouton pour confirmer la réservation-->
                    <input type="submit" value="Reserver" id="reservation">
                    <br><br />
                    <i class="chut">*toutes vos informations personnelles sont confidentielles</i>
                </fieldset>
            </form>
        </div>

        <br /><br /><br /><br />

        <div class="event">
            <form method="post" action="#" >
                <fieldset><!--zone pour le formulaire-->
                    <legend>Réservation Événement </legend><!--nom de la zone-->
                    <label >Nom :</label>
                    <input type="text" name="nom"  placeholder="Votre nom" required/><!--zone de texte pour le nom-->
                    <br><br />
                    <label >Prénom :</label>
                    <input type="text" name="prenom"  placeholder="votre Prénom" required/><!--zone de texte pour le prénom-->
                    <br><br />
                    <label >Numero de téléphone: </label><!--zone de texte por le numéro de téléphone-->
                    <input type="tel" name="tel" placeholder="Numéro de téléphone" required/>
                    <br><br />
                    <label >Date de Réservation: </label><!--zone de selection de dae sur un calendrier-->
                    <input type="date" name=" date" />
                    <br><br />
                    <label >Heure de réservation: </label><!--zone de selection d'horaire avec une horloge-->
                    <input type="time" name="hour" required/>
                    <br><br />
                    <label >Nombre de Personnes: </label>
                    <select class="nbr" name="nbr" required><!--zone de selection d'option'-->
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                
                    <select class="nbr" name="nbr"><!--zone selection option-->
                        <option>0</option>
                        <option>1</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option selected>8</option>
                        <option>9</option>
                    </select>
                    <br><br />
                    <label>Type évenenment: </label><!--zone selection option-->
                    <select name="event" required>
                        <option>Choisir un type </option>
                        <option>Anniversaire</option>
                        <option>Mariage</option>
                        <option>Séminaire</option>
                        <option>Soirée</option>
                        <option>Autre</option>
                    </select>
                    <br><br />
                
                    <label for="nom">Autre</label>
                    <input type="text" name="type" id="type" placeholder="Autre Événements" /><!--zone de texte -->
                    <br><br />
                
                    <!--<input type="submit" name="Réserver l'Événement" id="reservation" value="Reserver" />--><!--bouton pour confirmer la réservaton -->
                    <input type="submit" value="Reserver" id="reservation">
                    <br><br />
                    <i class="chut">*toute réservation d'Événement envoyée moins d'une semaine avant l'Événement ne sera pas prise en compte.</i>
                </fieldset>
            </form>
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
