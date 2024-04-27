<?php
    session_start();
    include_once 'setting.php';
    
    if (!isset($_SESSION['accueil'])|| !$_SESSION['accueil']) { // Si l'utilisateur n'est pas passé par l'accueil on l'y renvoie
        header('location:accueil.php');
    }
?>
	
<!DOCTYPE html>
<html lang="fr">

    <head>

        <title>Confirmation</title>
        <meta charset="utf-8">

        <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
        <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Accueil">
        <meta name="description" content="Confirmation de réservation">
        <meta http-equiv="refresh" content="5; URL=accueil.php">

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

            <div class="conteneur-confirmation">

                <?php 
                if(isset($_SESSION['reserv']) && $_SESSION['reserv']!=NULL){
                try{
                    require_once("setting.php");
    
                    $req = $conn->prepare("SELECT * FROM reservation WHERE Id=?"); //Préparation de la requete
                    $req->execute([$_SESSION['reserv']]); //Execution de la requete pour les entrees
                    $result = $req->fetch(PDO::FETCH_ASSOC);//récupérer le résultat pour les entrées
                    
                }                 
                catch(Exception $e){
                    die("Erreur : " . $e->getMessage());
                }
    
                if(isset($result)){
                    $date = new DateTimeImmutable($result["Date"]);
                    echo'<div class="conteneur_collab">';
                    echo'
                        <fieldset id="liste-recette-entree" style="background-color: var(--marron-fond);width: 70%;">
                        <legend>Votre réservation :</legend>
                            '.$result["Nom"].' '.$result["Prenom"].'<br>
                            '.$date->format('d-m-Y').' - '.$result["Heure"].'<br>
                            '.$result["Nombre"].' Personnes<br>
                        </fieldset>';
                    echo'</div>';
                    unset($_SESSION['reserv']);
                }
                }
                else echo'<p>Votre réservation a bien été prise en compte</p>';
            ?>

            </div>

        </main>

        <?php
    	include "footer.php";
	$conn = NULL;
    	?>

    </body>

</html>
