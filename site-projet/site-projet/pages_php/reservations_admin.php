<?php
    session_start();
    include_once 'setting.php';

    $_SESSION["current_page"]="reservadmin";
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Réservations</title>
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Menu">
    <meta name="description" content="Menu de la ch'tite mamie">

    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

</head>

<body><!--partie du code  en charge du contenu-->

    <header><!--Tête du contenu (haut de page)-->

        <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
       <!--liens pour faire apparaitre le logo du site-->
        <p style="display:inline;">Ch'tite mamie</p><!--Paragraphe pour le Nom du restaurant-->
        

    </header>

    <?php
    include "nav.php";
    ?>

    <main><!--partie en charge du contenu principale de la page-->
    <?php
        try{
                require_once("setting.php");

                $reqPrep="SELECT * FROM reservation";//La requete SQL SELECT
                $req = $conn->prepare($reqPrep); //Préparation de la requete

                 $req->execute(); //Execution de la requete pour les entrees
                 $result = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les entrées

                // $req->execute(['Prenom']); //Execution de la requete pour les plats
                // $result_prenom = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les plats

                // $req->execute(['Date']); //Execution de la requete pour les desserts
                // $result_date = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les desserts

                // $req->execute(['Heure']); //Execution de la requete pour les desserts
                // $result_heure = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les desserts

                // $req->execute(['Nombre']); //Execution de la requete pour les desserts
                // $result_nombre = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les desserts
                
                $conn= NULL;
                
        }                 
        catch(Exception $e){
            die("Erreur : " . $e->getMessage());
        }

        if(isset($result)){
            for ($i=0; $i<count($result); $i++) {
                echo'
                    <fieldset id="liste-recette-entree">
                    <legend>Réservation n°'.$i.'</legend>
                        '.$result[$i]["Nom"].' '.$result[$i]["Prenom"].'<br>
                        '.$result[$i]["Date"].' - '.$result[$i]["Heure"].'<br>
                        '.$result[$i]["Nombre"].' Personnes<br>
                    </fieldset>';
            }
        }
    ?>

    </main>
    
    <?php
    include "footer.php";
    ?>
</body>

</html>
            