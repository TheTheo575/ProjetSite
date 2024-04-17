<?php

    session_start();
    include_once 'setting.php';
    if (!isset($_SESSION['accueil'])|| !$_SESSION['accueil']) { // Si l'utilisateur n'est pas passé par l'accueil on l'y renvoie
        header('location:accueil.php');
    }
    $_SESSION["current_page"]="reservation";
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

    <nav><!--Menu de navigation-->
    <!--Tous ce code permet d'accéder au différentes pages de notre site ( ce sont des liens)-->
    <?php
    if(!isset($_SESSION['authentifie']) || $_SESSION['authentifie']=false || $_SESSION['admin']=false){
        ?>
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/accueil_eng.php" class="lien-interne"><b><u>FRA</u></b>/ENG</a>
            <a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>
            <a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>
            <?php 
        if(!isset($_SESSION['authentifie']) || $_SESSION['authentifie']=false){
            ?>
            <a href="connexion.php" class="lien-interne" style="fontsize: 2px;">Se connecter</a>
            <?php
        }
        else{
            ?>
            <a href="logout.php" class="lien-interne" style="fontsize: 2px;">Se déconnecter</a>
            <?php
        }
        ?>
        </div>
        <?php
    }
    elseif($_SESSION['admin']=true){
        ?>
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/reservation.php" class="lien-interne">Réservations</a>
            <a href="logout.php" class="lien-interne" style="fontsize: 2px;"><b><u>Se déconnecter</u></b></a>
        </div>
        <?php
    }
    ?>
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
                        if($vnb>=16){
                        ?>
                            <label>Type évenenment: </label>
                            <select name='event' required>
                                <option>Anniversaire</option>
                                <option>Mariage</option>
                                <option>Séminaire</option>
                                <option>Soirée</option>
                            
                            </select>
                        <?php
                        }
                        ?>
                        <br><br>
                        <input type='submit' name='Réserver' id='reservation' value='Reserver' />
                        
                        <br><br />
                        <i class='chut'>*toutes vos informations personnelles sont confidentielles</i>
                    </fieldset>
                </form>
            </div>
        <?php
        }
        
        ?>
        
   
        

        <br /><br /><br /><br />

        
    </div>
    </main>

    <?php
    include "footer.php";
    ?>

</body>

</html>
