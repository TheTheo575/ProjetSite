<?php
    include_once 'setting.php';
    include_once 'accueil.php';
    include_once 'accueil_eng.php';
    
    // if ($accueil == false || !isset($accueil)) {
    //     header('location:accueil_eng.php');
    // }
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Reservation</title>
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Reservation">
    <meta name="description" content="To reserve">
    <!--permet de mettre le logo en image du site-->
    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">
    <!--permet de lier la page avec la fiche -->
</head>

<body>

    <header>
        <!--partie en charge du titre et du logo de la pge-->
        <a href="../pages_php/accueil_eng.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <p style="display:inline;">Ch'tite mamie</p>

    </header>

    <nav><!--menu de navigation du site avec des liens -->

        <div class="conteneur-nav">
            <a href="../pages_php/accueil_eng.php" class="lien-interne">Home</a>
            <a href="../pages_php/menu_eng.php" class="lien-interne">Menu</a>
            <a href="../pages_php/reservation.php" class="lien-interne">FRA/<b><u>ENG</u></b></a>
            <a href="../pages_php/reservation_eng.php" class="lien-interne"><b><u>Order</u></b></a>
            <a href="../pages_php/collab_eng.php" class="lien-interne">Partnership</a>
        </div>

    </nav>

   <main>
        <div class="formreserv">
            <div class="reservation">
                <form method="post" action="#">
                    <fieldset><!--zone pour mettre un formulare-->
                        <legend>Your reservation : </legend><!--nom de la zone du formulaire-->
                        <label >Name : </label>
                        <input type="text" name="nom" id="nom" placeholder="your name" /><!--zone de texte pour le nom-->
                        <img src="../images/Assiette.png" alt="LogoAssiette" id="Assiette"> <p style="display:inline;"></p>
                         <br><br />
                        <label >First name : </label>
                         <input type="text" name="prenom" id="prenom" placeholder="your first name" /><!--zone de texte pour le prénom-->
                        <br><br />
                        <label >Number of people : </label><!--zone de sélection d'option-->
                        <select class="nbr" name="nbr">
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
                        <label >Date of the reservation : </label>
                        <input type="date" name=" date" /><!--zone de selection date avec un calendrier-->
                        <br><br />
                        <label >Hour of the reservation : </label>
                        <input type="time" name="hour" /><!--zone selection haoraire avec une horloge-->
                        <br><br />
                        <label >Phone number : </label>
                        <input type="tel" name="tel" placeholder="number" /><!--zone de texte pour le numero de telephone-->
                        <br><br />
                        <!--<input type="submit" name="Réserver" id="reservation" value="Book" />--><!--bouton pour confirmer réservation-->
                        <a href="confirmation_eng.php" id="reservation">Submit</a>
                        <br><br />
                        <i class="chut">*all your informations are confidentials</i>
                    </fieldset>
                </form>
            </div>
    
            <br /><br /><br /><br />
    
            <div class="event">
                <form method="post" action="#" >
                    <fieldset><!--zone début nouveaux formulaire-->
                        <legend>Event reservation </legend><!--nom de la zone du formulaire-->
                        <label >Name : </label>
                        <input type="text" name="nom"  placeholder="your name" /><!--zone de texte pour le nom-->
                        <br><br />
                        <label >First name : </label>
                        <input type="text" name="prenom"  placeholder="your first name" /><!--zone de texte pour le prénom-->
                        <br><br />
                        <label >Phone number : </label><!--zone de texte pour le numéro de téléphone-->
                        <input type="tel" name="tel" placeholder="number" />
                        <br><br />
                        <label >Date of reservation : </label>
                        <input type="date" name=" date" /><!--zone de selection de date sur un calendrier-->
                        <br><br />
                        <label >Hour of reservation : </label>
                        <input type="time" name="hour" /><!--zone de selection d'horaire avec horloge-->
                        <br><br />
                        <label >Number of people : </label>
                        <select class="nbr" name="nbr"><!--zone de selection option-->
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
                        <label >Event type : </label>
                        <select name="event"><!--zone selection option-->
                            <option>Choose a type </option>
                            <option>Birthday</option>
                            <option>Wedding</option>
                            <option>Seminar</option>
                            <option>Party</option>
                            <option>Other</option>
                        </select>
                        <br><br />
                    
                        <label for="nom">Other : </label><!--zone de texte pour other-->
                        <input type="text" name="type" id="type" placeholder="Other event" />
                        <br><br />
                    
                        <!--<input type="submit" name="Réserver l'Événement" id="reservation" value="Book" />-->
                        <a href="confirmation_eng.php" id="reservation2">Submit</a>
                        <br><br /><!--bouton confirmation reservation-->
                        <i class="chut">*all reservation made less than one week before the date will not be considered</i>
                    </fieldset>
                </form>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.5773028165336!2d2.430749075747542!3d50.968518971695794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf360f6b0d15b%3A0x1fde110afbf3f137!2sBergues!5e0!3m2!1sfr!2sfr!4v1702378398429!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
