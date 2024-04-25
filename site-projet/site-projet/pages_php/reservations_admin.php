<?php
    session_start();
    include_once 'setting.php';

    $_SESSION["current_page"]="Reservations";
?>
	
<!DOCTYPE html>
<html lang="fr">

    <?php
    include "header.php";
    ?>

    <main><!--partie en charge du contenu principale de la page-->
    <?php
        try{
                require_once("setting.php");

                $reqPrep="SELECT * FROM reservation";//La requete SQL SELECT
                $req = $conn->prepare($reqPrep); //Préparation de la requete

                 $req->execute(); //Execution de la requete pour les entrees
                 $result = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les entrées

                $conn= NULL;
                
        }                 
        catch(Exception $e){
            die("Erreur : " . $e->getMessage());
        }

        if(isset($result)){
            echo'<div class="conteneur_collab">';
            for ($i=0; $i<count($result); $i++) {
                $date = new DateTimeImmutable($result[$i]["Date"]);
                echo'
                    <fieldset id="liste-recette-entree" style="background-color: var(--marron-fond);width: 20%;">
                    <legend style="background-color: var(--marron-fond);">Réservation n°'.($i+1).'</legend>
                        '.$result[$i]["Nom"].' '.$result[$i]["Prenom"].'<br>
                        '.$date->format('d-m-Y').' - '.$result[$i]["Heure"].'<br>
                        '.$result[$i]["Nombre"].' Personnes<br>
                        '.$result[$i]["Event"].'
                    </fieldset>';
            }
            echo'</div>';
        }
    ?>

    </main>
    
    <?php
    include "footer.php";
    ?>
</body>

</html>
            