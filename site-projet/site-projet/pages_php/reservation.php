<?php

    session_start();
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
        <?php

        
        if(isset($_POST["EnvoieValide"])||$_SERVER['REQUEST_METHOD']!='POST')
        {
		    header('reservation.php');
        ?>
            <div class='reservation'><form method='post' action='reservation.php'legend='nbr client'><fieldset><label> Nombre de Personne: <label>
            <input type='text' name='nbrparticipant' id='nbrparticipant' required pattern='[1-9]+'>
            <input type='submit' name='Envoyer' Value='Valider'/></fieldset></form></div>
            <?php
        }
        if(isset($_POST['nbrparticipant'])){
            $vnb = $_POST['nbrparticipant'];
            if($vnb>=16) {
            ?>
                <div class='event'>
                <form method='post' action='reservation.php'>
                    <fieldset>
                        <legend>Réservation Événement </legend>
                        <label >Nom :</label>
                        <input type='text' name='nom' id='nom' placeholder='Votre nom' required pattern="^[A-Za-z '-]}$" maxlenghth="40"/>
                        <br><br />
                        <label >Prénom :</label>
                        <input type='text' name='prenom' id='prenom'  placeholder='votre Prénom' required pattern="^[A-Za-z '-]}$" maxlenghth="40"/>
                        <br><br />
                        <label >Numero de téléphone: </label>
                        <input type='tel' name='tel'  id='tel' placeholder='Numéro de téléphone' required/>
                        <br><br />
                        <label >Date de Réservation: </label>
                        <input type='date' name=' date' id='date' required/>
                        <br><br />
                        <label >Heure de réservation: </label>
                        <input type='time' name='time' id='time' required/>
                        <br><br />
                        
                        
                        <label>Type évenenment: </label>
                        <select name='event' required>
                            <option>Anniversaire</option>
                            <option>Mariage</option>
                            <option>Séminaire</option>
                            <option>Soirée</option>
                           
                        </select>
                        <br><br />
                        <?php
                        echo"<label> Nombre de Personne: <label>
                        <input type='text' name='nbrparticipant' id='nbrparticipant' required pattern='[1-9]+' value='$vnb'; >
                        <br><br />"
                        ?>
                    
                        
                        <input type='submit' value='Reserver' id='reservation' name='Reserver'>
                        <br><br />
                        <i class='chut'>*toute réservation d'Événement envoyée moins d'une semaine avant l'Événement ne sera pas prise en compte.</i>
                    </fieldset>
                </form>
            </div>
                <?php
            }
            elseif($vnb<16 ){
                ?>
            <div class='reservation'>
                <form method='post' action='reservation.php'>
                    <fieldset>
                        
                        <legend>Votre réservation : </legend>
                        <label for='nom'>Nom :</label>
                        <input type='text' name='nom' id='nom' placeholder='Votre nom' required pattern="^[A-Za-z '-]}$" maxlenghth="40" />
                        <img src='../images/Assiette.png' alt='LogoAssiette' id='Assiette'> <p style='display:inline;'></p>
                        <br><br />
                        <label for='prenom'>Prénom :</label>
                        <input type='text' name='prenom' id='prenom' placeholder='votre Prénom' required pattern="^[A-Za-z '-]}$" maxlenghth="40"/>
                        <br><br />

                        <label >Date de Réservation: </label>
                        <input type='date' name='date' id='date' required/>
                        <br><br />
                        <label >Heure de réservation: </label>
                        <input type='time' name='time'id='time' required />
                        <br><br />
                        <label >Numero de téléphone: </label>
                        <input type='tel' name='tel' id='tel' placeholder='Numéro de téléphone' required/>
                        <br><br />
                        <?php
                        echo"<label> Nombre de Personne: <label>
                        <input type='text' name='nbrparticipant' id='nbrparticipant' required pattern='[1-9]+' value='$vnb'; >
                        <br><br />"
                        ?>
                        <input type='submit' name='Réserver' id='reservation' value='Reserver' />
                        
                        <br><br />
                        <i class='chut'>*toutes vos informations personnelles sont confidentielles</i>
                    </fieldset>
                </form>
            </div>
            <?php
            }
        }
        
        ?>
        
   
        

        <br /><br /><br /><br />

        
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
